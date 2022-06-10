<?php

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');


Route::get('/sell', function () {
    return view('logged.sell');
})->middleware(['auth'])->name('sell');

Route::get('/shoppingCart', function () {
    return view('logged.shoppingCart');
})->middleware(['auth'])->name('shoppingCart');

Route::get('/myPublications', function () {
    return view('logged.myPublications');
})->middleware(['auth'])->name('myPublications');


Route::get('/profile', function () {
    return view('profile.profile');
})->middleware(['auth'])->name('profile');

Route::get('/contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';