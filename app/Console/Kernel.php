<?php

namespace App\Console;

use App\Console\Commands\BackupSql;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{


    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
        
    }



    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('backup:MySql')->everyMinute()->timezone('Asia/Baghdad');
           
    }
    
}
