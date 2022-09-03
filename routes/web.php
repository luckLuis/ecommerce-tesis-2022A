<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\PasswordController;
use App\Http\Controllers\Profile\UsernameController;
use App\Http\Controllers\Profile\ProfileAvatarController;
use App\Http\Controllers\Profile\ProfileInformationController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Products\ProductsListController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterUserController;
use App\Http\Controllers\Products\CarController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Products\MyProductsController;

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

//Route::post("/register", [RegisterController::class,'register'])->name('user.register');
Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post("/login", [LoginController::class,'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// RUTAS PARA EL REGISTRO DEL USUARIO
// Invocación de la vista
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');

// Verificación en la base de datos
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/product/{slug}', [ProductsListController::class, 'index'])->name('product.show');
Route::get('/category/product', [ProductsListController::class, 'show'])->name('product.show');
Route::get('/category/product/{id}', [ProductsListController::class, 'oneProduct'])->name('products.oneProduct');
Route::get('/category/{id}', [ProductsListController::class, 'index'])->name('products');

Route::get('/', [CategoryController::class, 'index'])->name('welcome');
Route::get('/', [CategoryController::class, 'header'])->name('welcome');

Route::middleware([])->group(function ()
{

Route::get('/dashboard', function () {
    return view('welcome');
})->name('home');


// Invocación de la vista para publicar productos
Route::get('/sell', [ProductsController::class, 'index'])->name('sell');
    
Route::post("/sell", [ProductsController::class,'store'])->name('product.store');

// Invocación de la vista para carrito de compras
Route::get('/cart', [CarController::class, 'index'])->name('shoppingCart');
 
Route::get('/cart/products/{id}', [CarController::class, 'add'])->name('cart.add');

Route::get('/cart', [CarController::class, 'index'])->name('cart.buy');


Route::get('/cart/discard/{id}', [CarController::class, 'discard'])->name('cart.discard');
Route::get('/cart/reserve/{id}', [CarController::class, 'reserve'])->name('cart.reserve');
Route::get('/cart/buy/{id}', [CarController::class, 'buy'])->name('cart.buy');


Route::get('/myProducts', [MyProductsController::class, 'index'])->name('publications');
Route::get('/myProducts/{id}', [MyProductsController::class, 'delete'])->name('delete');


Route::get('/reserve', [CarController::class, 'reserveList'])->name('notifications');
Route::get('/list/reserve', [CarController::class, 'listReserve'])->name('list.reserve');


Route::get('/myProducts/product/edit/{id}', [ProductsController::class, 'show'])->name('product.show');
Route::post('/myProducts/product/edit', [ProductsController::class, 'edit'])->name('product.edit');

Route::get('/profile', [ProfileInformationController::class, 'edit'])->name('profile');
Route::put('/profile', [ProfileInformationController::class, 'update'])->name('profile.update');

Route::put('/password', [PasswordController::class, 'update'])->name('user-password.update');

Route::get('/username', [UserNameController::class, 'edit'])->name('username');
Route::put('/username', [UserNameController::class, 'update'])->name('user-username.update');
Route::put('/user-avatar', [ProfileAvatarController::class, 'update'])->name('user-avatar.update');


Route::get('/sellComplete', function () {
    return view('logged.sellComplete');
})->name('sellComplete');
});




Route::get('/category/{slug}', [ProductController::class, 'index'])->name('products');

Route::get('/user/{name}', [UsersController::class, 'user'])->name('visitor');


Route::get('/categorias', [CategoryController::class, 'index'])->name('categorias');


require __DIR__.'/auth.php';