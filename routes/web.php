<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicBarController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [MusicBarController::class, 'home']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/my-music-bar', [MusicBarController::class, 'show']);
    Route::get('/users', [MusicBarController::class, 'index']);
});
