<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/* -------------------------------------------------------------------------- */
/*                               Frontend Routes                              */
/* -------------------------------------------------------------------------- */


/* ------------------------------ Landing Page ------------------------------ */
Route::get('/', function () {
    return view('pages.frontend.index');
});

/* ----------------------------- Features Page ------------------------------ */
Route::get('/about', function () {
    return view('pages.frontend.about');
});

/* ------------------------------ Article Page ------------------------------ */
Route::get('/article', function () {
    return view('pages.frontend.article');
});

/* ------------------------------ Gallery Page ------------------------------ */
Route::get('/gallery', function () {
    return view('pages.frontend.gallery');
});

/* ------------------------------ Contact Page ------------------------------ */
Route::get('/contact', function () {
    return view('pages.frontend.contact');
});


/* -------------------------------------------------------------------------- */
/*                               Backend Routes                               */
/* -------------------------------------------------------------------------- */


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
