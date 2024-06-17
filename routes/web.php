<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;

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

Route::group(['middleware'=> ['locale'], 'prefix'=>'{lang?}'], function() {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/test/mest', function () {
        return view('welcome');
    })->name('mypage');
    Route::get('/my', [Controllers\MyController::class,'index'])->name('test');
});


