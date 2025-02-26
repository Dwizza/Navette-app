<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', [userController::class, 'welcome'])->middleware('authMiddleware')->name('authlogin');
// Route::get('/login', [userController::class, 'login']);
// Route::post('/login', [userController::class, 'authLogin']);
// Route::get('/register', [userController::class, 'register']);
// Route::post('/register', [userController::class, 'store']);

Route::get('/', [userController::class, 'welcome'])->middleware('auth');

// Login routes
Route::get('/login', [userController::class, 'login'])->name('login');
Route::post('/login', [userController::class, 'authLogin']);

// Registration routes
Route::get('/register', [userController::class, 'register'])->name('register');
Route::post('/register', [userController::class, 'store']);


Route::post('/logout', [userController::class, 'logout'])->name('logout');
