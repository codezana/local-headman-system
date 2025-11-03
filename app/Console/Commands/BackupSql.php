<?php
namespace App\Console\Commands;

use App\Models\Backup;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;

class BackupSql extends Command
{
    // The name and signature of the console command.
    protected $signature = 'backup:MySql';

    // The console command description.
    protected $description = 'Backup the MySQL database';

    // Maximum number of backup files to keep
    protected $maxBackupFiles = 25;

    public function __construct()
    {
        parent::__construct();
    }

    // Execute the console command.
    public function handle()
    {
        // MySQL connection details from environment variables
        $dbName = env('DB_DATABASE');
        $dbUser = env('DB_USERNAME');
        $dbPassword = env('DB_PASSWORD');
        $dbHost = env('DB_HOST');
        $dbPort = env('DB_PORT', 3306);

        $backupData = Backup::first();
        Log::info('Database backup started' . ($backupData ? $backupData->path : 'No path found in backup data'));
        
        // Specify your external backup directory
        $externalBackupDir = $backupData ? $backupData->path : 'C:\DatabaseBackups';

        // Ensure the backup directory exists, create it if it doesn't
        if (!File::exists($externalBackupDir)) {
            try {
                File::makeDirectory($externalBackupDir, 0755, true);
            } catch (\Exception $e) {
                $this->error('Failed to create backup directory: ' . $e->getMessage());
                Log::error('Failed to create backup directory: ' . $e->getMessage());
                return;
            }
        }

        // Create a timestamped backup file name
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $backupFile = $externalBackupDir . DIRECTORY_SEPARATOR . 'database_' . $timestamp . '.sql';

        // Full path to mysqldump.exe
        $mysqldumpPath = base_path('mysqldump.exe');

        // Command to dump the MySQL database
        $dumpCommand = sprintf(
            '"%s" --host=%s --port=%d --user=%s --password=%s %s > %s',
            $mysqldumpPath,
            escapeshellarg($dbHost),
            escapeshellarg($dbPort),
            escapeshellarg($dbUser),
            escapeshellarg($dbPassword),
            escapeshellarg($dbName),
            escapeshellarg($backupFile)
        );

        // Execute the dump command
        $process = Process::fromShellCommandline($dumpCommand);

        try {
            $process->mustRun();
            $this->info('Database backup created: ' . $backupFile);
            Log::info('Database backup created: ' . $backupFile);
        } catch (\Exception $e) {
            $this->error('Failed to create backup: ' . $e->getMessage());
            Log::error('Failed to create backup: ' . $e->getMessage());
            return;
        }

        Log::info('Database backup ended');
        // Remove excess backup files if necessary
        $this->manageBackupFiles($externalBackupDir);
    }

    // Remove excess backup files to maintain the maximum limit
    protected function manageBackupFiles($backupDir)
    {
        $backupFiles = File::glob($backupDir . DIRECTORY_SEPARATOR . 'database_*.sql');
        $numBackupFiles = count($backupFiles);

        if ($numBackupFiles > $this->maxBackupFiles) {
            // Sort files by modification time (oldest first)
            usort($backupFiles, function ($a, $b) {
                return filemtime($a) - filemtime($b);
            });

            // Determine how many files to remove
            $filesToRemove = $numBackupFiles - $this->maxBackupFiles;

            // Remove the oldest backup files
            for ($i = 0; $i < $filesToRemove; $i++) {
                try {
                    File::delete($backupFiles[$i]);
                    $this->info('Deleted old backup file: ' . $backupFiles[$i]);
                    Log::info('Deleted old backup file: ' . $backupFiles[$i]);
                } catch (\Exception $e) {
                    $this->error('Failed to delete old backup file: ' . $backupFiles[$i] . ' - ' . $e->getMessage());
                    Log::error('Failed to delete old backup file: ' . $backupFiles[$i] . ' - ' . $e->getMessage());
                }
            }
        }
    }
}
