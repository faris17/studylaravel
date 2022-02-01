<?php

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\UserController;
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

Route::prefix('user')->group(function(){
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
});

Route::get('province', [ProvinceController::class, 'index'])->name('province.index');


