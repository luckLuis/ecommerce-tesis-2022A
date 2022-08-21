<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


// RUTAS PARA EL INICIO DE SESIÓN
// Invocación de la vista
//Route::get('/login', [AuthenticatedSessionController::class, 'create'])
 //   ->middleware('guest')
 //   ->name('login');
// Verificación en la base de datos
//Route::post('/login', [AuthenticatedSessionController::class, 'store'])
 //   ->middleware('guest');


// RUTAS PARA EL CIERRE DE SESIÓN
//Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
  //  ->middleware('auth')
    //->name('logout');


// RUTAS PARA EL RESTABLECIMIENTO DE LA CONTRASEÑA Y ENVÍO AL EMAIL
// Invocación de la vista
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

// Verificación en la base de datos
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');


// RUTAS PARA ESTABLECER LA NUEVA CONTRASEÑA UNA VEZ VERIFICADO EL EMAIL
// Invocación de la vista
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');
// Verificación en la base de datos y actualización de la misma
Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

/*
// RUTAS PARA EL REGISTRO DEL USUARIO
// Invocación de la vista
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

// Verificación en la base de datos
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

*/
// RUTAS PARA CUANDO EL USUARIO SE REGISTRE VERIFIQUE EL EMAIL ENVIADO
// Verificación del email
Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');
    
// Verificación del email y del token
Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

// Envío del email de verificación nuevamente en el caso de que se lo requiera nuevamente
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');