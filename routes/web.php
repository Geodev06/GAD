<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Register;
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
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', function () {
        return view('pages.dashboard');
    });

    Route::get('manage-users', function () {
        return view('pages.manage-user');
    });

    Route::get('settings', function () {
        return view('pages.settings');
    });
});

Route::middleware(['auth'])->group(function () {

    Route::get('manage-students', function () {
        return view('pages.manage-student');
    });

    Route::get('manage-sections', function () {
        return view('pages.manage-section');
    });
});
