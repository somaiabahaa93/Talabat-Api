<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
// use App\Http\Middleware\CheckPassword;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('role:admin');

Route::resource('cusines', App\Http\Controllers\CusineController::class);



Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');

Route::post('userunban/{user}',[UserController::class,'unban'])->name('users.unban');
Route::post('userban/{user}',[UserController::class,'ban'])->name('users.ban');

