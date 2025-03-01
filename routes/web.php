<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\userController;
use App\Http\Middleware\authMiddleware;
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







Route::get('/client', [userController::class, 'welcome']);
Route::get('/detail', [AnnonceController::class, 'show']);

    Route::get('/company', [AnnonceController::class, 'index']);
    Route::get('/formannonce', [AnnonceController::class, 'create']);
    Route::post('/formannonce', [AnnonceController::class, 'store']);
    Route::get('/formEdit/{id}', [AnnonceController::class, 'edit']);
    Route::post('/formEdit/{id}', [AnnonceController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [AnnonceController::class, 'destroy'])->name('delete');
    route::get('/detailAnnonce/{id}',[AnnonceController::class, 'show'])->name('detailAnnonce');


    Route::get('/register', [userController::class, 'register'])->name('register');
    Route::get('/login', [userController::class, 'login'])->name('login');

    Route::post('/login', [userController::class, 'authLogin']);
    Route::post('/register', [userController::class, 'store']);
    Route::post('/logout', [userController::class, 'logout'])->name('logout');
