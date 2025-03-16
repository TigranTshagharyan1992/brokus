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
    Route::get('/', Controllers\HomeController::class)->name('home');
    Route::get('/services', Controllers\ServicesController::class)->name('services');
    Route::get('/price-policy', Controllers\PricePolicyController::class)->name('pricePolicy');
    Route::get('/contacts', Controllers\ContactsController::class)->name('contacts');
    Route::get('/about', Controllers\AboutController::class)->name('about');
    Route::get('/partners', Controllers\PartnersController::class)->name('partners');
    Route::get('/blog', Controllers\BlogController::class)->name('blog');
    Route::get('/blog-inner', Controllers\BlogInnerController::class)->name('blogInner');
    Route::get('/faq', Controllers\FaqController::class)->name('faq');
    Route::get('/privacy-policy', Controllers\PrivacyPolicyController::class)->name('privacyPolicy');
    Route::post('/send-mail', Controllers\ContactController::class)->name('contact');
});


