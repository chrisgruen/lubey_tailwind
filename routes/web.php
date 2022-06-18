<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [HomeController::class, 'getHomeScreen'])->name('home');
Route::get('/home', [HomeController::class, 'getHomeScreen'])->name('home');
Route::get('/registrieren', [HomeController::class, 'getSignUpStep1'])->name('register');
Route::get('/login', [HomeController::class, 'getSignUpStep1'])->name('register');
Route::get('/{pageID}', [HomeController::class, 'getContent'])->name('content.page');