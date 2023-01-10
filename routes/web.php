<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\http\Middleware\Role;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister']);
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);

Route::get('/home', [AbsenController::class, 'index'])->middleware(['auth', 'role:dosen']);
Route::post('/absensi', [AbsenController::class, 'absensi'])->middleware(['auth', 'role:dosen']);

Route::get('/home/admin/prodi', [AdminController::class, 'prodi']);
Route::get('/home/admin/add-pbb', [AdminController::class, 'addpbb']);
Route::post('/postpbb', [AdminController::class, 'postpbb']);