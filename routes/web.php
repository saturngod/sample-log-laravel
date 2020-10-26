<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
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


Route::prefix('backend')->group(function () {
    Route::get('login', [AuthController::class,'show'])->name('login');
    Route::post('login', [AuthController::class,'login'])->name('auth.login');
    Route::get('logout',function() {
        return "ERROR";
    });
    Route::post('logout', [AuthController::class,'logout'])->name('auth.logout');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/',[DashboardController::class, 'home'])->name("home"); 
        Route::get('/search',[DashboardController::class, 'search'])->name("home.search"); 
    });
    
});


Route::post('/log', [LogController::class, 'write'])->name("log.write");
