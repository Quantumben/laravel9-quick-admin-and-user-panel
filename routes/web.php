<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');


    Route::get('/password/reset', [App\Http\Controllers\Admin\Password\ForgetPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/password/email', [App\Http\Controllers\Admin\Password\ForgetPasswordController::class, 'SendResetLinkEmail'])->name('admin.password.email');
    Route::get('/password/reset/{token}', [App\Http\Controllers\Admin\Password\ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('/password/reset', [App\Http\Controllers\Admin\Password\ResetPasswordController::class, 'reset'])->name('admin.password.update');


    Route::group(['middleware' => 'auth:admin'], function() {
        Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
        Route::post('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');
    });
});

//Dashboard

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('transaction', [App\Http\Controllers\DashboardController::class, 'transaction'])->name('transaction');
    Route::get('profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
    Route::get('buy', [App\Http\Controllers\DashboardController::class, 'buy'])->name('buy');
    Route::get('withdraw', [App\Http\Controllers\DashboardController::class, 'withdraw'])->name('withdraw');

    });
