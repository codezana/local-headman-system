<?php

namespace App\Http\Controllers;

use App\Models\Backup;
use App\Models\Family;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Retrieve all invoices with their related family members and order by desc
        $invoices = Invoice::with('families')->orderByDesc('updated_at')->get();
        $backup = Backup::First();
        return view('welcome', compact('invoices', 'backup'));
    }

    public function backup(Request $request)
    {

        $backupFolder = $request->input('backupFolder');
        Log::info($backupFolder);
        $UpdateBackup=Backup::First();
        $UpdateBackup->update([
            'path' => $backupFolder
        ]);
        return response()->json(['success' => true]);

    }


    public function importDatabase(Request $request)
    {
      
        // Store the uploaded SQL file temporarily
        $path = $request->file('importFile')->storeAs('temp', 'import.sql');

        // Read the SQL file content
        $sql = Storage::get($path);

        // Drop all tables
        $tables = DB::select('SHOW TABLES');
        $tableKey = 'Tables_in_' . env('DB_DATABASE');

        foreach ($tables as $table) {
            DB::statement('DROP TABLE IF EXISTS ' . $table->$tableKey);
        }

        // Import the SQL file content
        DB::unprepared($sql);

        // Delete the temporary file
        Storage::delete($path);

        return response()->json(['success' => 'Database imported successfully']);
    }




    
}
