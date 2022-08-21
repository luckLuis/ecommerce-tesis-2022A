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
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::post("/login", [LoginController::class,'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// RUTAS PARA EL REGISTRO DEL USUARIO
// Invocación de la vista
Route::get('/register', [RegisterUserController::class, 'create'])

    ->name('register');

// Verificación en la base de datos
Route::post('/register', [RegisterUserController::class, 'store']);

/*
// RUTAS PARA EL CIERRE DE SESIÓN
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
*/

//sin necesidad de login


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


Route::get('/myPublications', function () {
    return view('logged.myPublications');
})->name('myPublications');

Route::get('/notifications', function () {
    return view('profile.notifications');
})->name('notifications');





Route::get('/product/edit', function () {
    return view('logged.editPublication');
})->name('editPublication');


Route::get('/profile', [ProfileInformationController::class, 'edit'])->name('profile');
Route::put('/profile', [ProfileInformationController::class, 'update'])->name('profile.update');
Route::put('/password', [PasswordController::class, 'update'])->name('user-password.update');

Route::get('/username', [UserNameController::class, 'edit'])->name('username');
Route::put('/username', [UserNameController::class, 'update'])->name('user-username.update');

Route::put('/user-avatar', [ProfileAvatarController::class, 'update'])->name('user-avatar.update');

/*
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/create', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/update/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
*/

Route::get('/sellComplete', function () {
    return view('logged.sellComplete');
})->name('sellComplete');


});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/category/{slug}', [ProductController::class, 'index'])->name('products');

Route::get('/user/{name}', [UsersController::class, 'user'])->name('visitor');


Route::get('/categorias', [CategoryController::class, 'index'])->name('categorias');


require __DIR__.'/auth.php';