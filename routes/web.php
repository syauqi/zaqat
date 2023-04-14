<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.frontend.index');
});

Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group(function () {
        /* -------------------------- Dashboard Index Pages ------------------------- */
        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
        /* ------------------------- Jadwal Pelajaran Pages ------------------------- */
        Route::get('/jadwal-pelajaran', 'App\Http\Controllers\ScheduleController@index');
        Route::get('/jadwal-pelajaran/atur-jadwal', 'App\Http\Controllers\ScheduleController@create');
        Route::resource('schedules', 'App\Http\Controllers\ScheduleController');
    });

require __DIR__.'/auth.php';
