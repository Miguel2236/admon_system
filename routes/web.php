<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentController;

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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user_edit');

// Route::get('/user/list', [DepartamentController::class, 'index'])->name('user_list');

Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user_update');

Route::get('/departament/list', [DepartamentController::class, 'index'])->name('departament_list');
