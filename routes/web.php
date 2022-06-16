<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\PasswordController;
use App\Http\Controllers\Profile\ProfileInformationController;
use App\Http\Controllers\UsersController;
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

Route::middleware(['auth', 'verified'])->group(function ()
{

Route::get('/dashboard', function () {
    return view('welcome');
})->name('home');



Route::get('/sell', function () {
    return view('logged.sell');
})->name('sell');

Route::get('/shoppingCart', function () {
    return view('logged.shoppingCart');
})->name('shoppingCart');

Route::get('/myPublications', function () {
    return view('logged.myPublications');
})->name('myPublications');

Route::get('/profile', [ProfileInformationController::class, 'edit'])->name('profile');
Route::put('/profile', [ProfileInformationController::class, 'update'])->name('profile.update');
Route::put('/password', [PasswordController::class, 'update'])->name('user-password.update');

});


Route::get('/women/categoryProducts', function () {
    return view('categoryProducts');
})->name('categoryProducts');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/usuarios', [UsersController::class, 'index'])->name('users');


require __DIR__.'/auth.php';