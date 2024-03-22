<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPengaduanController;
use App\Http\Controllers\PengaduanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('dashboard.index');
})->middleware("auth");

Route::get('/app', function () {
    return view('app');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('/dashboard.index');
});

Route::resource('dashboard/pengaduan', DashboardPengaduanController::class)->middleware('auth','isadmin');

//route CRUD
// Route::get('/pengaduan','PengaduanController@index');
// Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');