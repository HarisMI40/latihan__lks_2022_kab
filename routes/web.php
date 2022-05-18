<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\customer\loginController as customerLogin;
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
Route::prefix('admin')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [loginController::class, 'index']);
        Route::post('login', [loginController::class, 'login'])->name('admin.login');
    });

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [loginController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [loginController::class, 'logout'])->name('admin.logout');
    });
});


    Route::middleware('guestCustomer')->group(function () {
        Route::get('login', [customerLogin::class, 'index']);
        Route::post('login', [customerLogin::class, 'login'])->name('customer.login');
    });

    Route::middleware('authCustomer')->group(function () {
        Route::get('dashboard', [customerLogin::class, 'dashboard'])->name('customer.dashboard');
        Route::get('about', [customerLogin::class, 'about'])->name('customer.about');
        Route::get('logout', [customerLogin::class, 'logout'])->name('customer.logout');
    });
