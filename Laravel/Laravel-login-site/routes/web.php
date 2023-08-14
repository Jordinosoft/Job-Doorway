<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
})->name('home1');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('register', [usercontroller::class, 'register'])->name('register');
Route::post('register', [usercontroller::class, 'register_action'])->name('register.action');
Route::get('login', [usercontroller::class, 'login'])->name('login');
Route::post('login', [usercontroller::class, 'login_action'])->name('login.action');
