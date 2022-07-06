<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\NewsController;

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

// guest (not login)
Route::middleware(['guest'])->group(function () {
    Route::get('/registrieren', [AuthController::class, 'getSignUpStep1'])->name('user.signup.registrieren');
    Route::post('/registration', [AuthController::class, 'postSignUpStep1'])->name('user.signup.Step1');
    Route::get('/login', [AuthController::class, 'getSignin'])->name('login');
    Route::post('/login', [AuthController::class, 'postSignin'])->name('user.signin');
    Route::get('/login/passwordResetForm', [AuthController::class, 'passwordResetForm'])->name('password.email');
    Route::post('/login/passwordReset', [AuthController::class, 'passwordReset'])->name('password.reset');
    Route::post('/passwordReset', [AuthController::class, 'passwordReset'])->name('user.passwordReset');
});

// normal User login (general)

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'getLogout'])->name('user.logout');
    Route::view('/user/settings', 'user.settings')->name('user.settings');
    Route::view('/user/profile', 'user.profile')->name('user.profile');
});

Route::get('/', [HomeController::class, 'getHomeScreen'])->name('home');
Route::get('/home', [HomeController::class, 'getHomeScreen'])->name('home');
Route::get('/dashboard', [HomeController::class, 'getDashboard'])->name('bay.index');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{name}', [NewsController::class, 'get'])->name('news.detail');

Route::get('/alloc_details/{allocationName}', [AllocationController::class, 'getDetails'])->name('alloc.details');
Route::post('/newsletter_subscribe', [HomeController::class, 'subscribe_newsletter'])->name('newsletter.subscribe');
Route::post('/chartdata', [HomeController::class, 'getChartData'])->name('chartdata');


Route::get('/{pageID}', [HomeController::class, 'getContent'])->name('content.page');



