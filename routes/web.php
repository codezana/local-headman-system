<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Operation\InsertController;
use App\Http\Controllers\Operation\UpdateController;
use App\Http\Controllers\Operation\DeleteController;
use App\Http\Controllers\Operation\PrintController as PrintController;
use App\Http\Controllers\PrintController as GeneralPrintController;
use Illuminate\Support\Facades\Artisan;

// Auth routes configuration
Auth::routes([   
    'password.confirm' => false,
    'register' => false,
    'password.reset' => false,
]);

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home.page')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');



// Grouped operation routes with middleware
Route::middleware(['auth'])->group(function () {
    // Insert Operations
    Route::get('/insert', [InsertController::class, 'view'])->name('insert');
    Route::post('/store', [InsertController::class, 'store'])->name('store');

    // Update Operations
    Route::get('/edit', [UpdateController::class, 'view'])->name('edit');
    Route::post('/update', [UpdateController::class, 'update'])->name('update');

    // Delete Operations
    Route::delete('/delete', [DeleteController::class, 'delete'])->name('delete');

    // Print Operations
    Route::get('/view', [PrintController::class, 'view'])->name('view');
    Route::post('/print', [PrintController::class, 'print'])->name('print');

    // General print route
    Route::get('/print-data', [GeneralPrintController::class, 'printData'])->name('print-data');


    //Backup 
    Route::post('/backup', [HomeController::class, 'backup'])->name('backup');

    //import 
    Route::post('/import-database', [HomeController::class, 'importDatabase'])->name('import.database');



// excecute command
Route::post('/run-backup', function () { Artisan::call('backup:MySql'); return response()->json(['success' => true]); })->name('run-backup');





});
