<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagsController;
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








Route::middleware('myAuth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('tags', [TagsController::class, 'index']);
        Route::post('tags', [TagsController::class, 'store']);
        Route::get('tags/{id}', [TagsController::class, 'show']);
        Route::post('tags/update/{id}', [TagsController::class, 'update'])->name('update');
        Route::post('tags/delete/{tags:id}', [TagsController::class, 'destroy']);
        Route::get('roles', [RoleController::class, 'index']);
        Route::post('roles/create', [RoleController::class, 'store'])->name('roles.store');
        Route::get('users', [AdminController::class, 'index']);
        Route::post('user/edit/{admin:id}', [UserController::class, 'editRole']);
    });
});

route::middleware('myAuth')->group(function(){
    route::prefix('company')->group(function(){
        route::get('/',[AnnonceController::class,'index']);
        route::get('/formannonce',[AnnonceController::class,'create']);
        route::post('/formannonce',[AnnonceController::class,'store'])->name('annonceStorePost');
        route::get('detailAnnonce/{id}',[AnnonceController::class,'show']);
        route::get('/formEdit/{id}',[AnnonceController::class,'edit'])->name('annonceEditPost');
        route::post('/formEdit/{id}',[AnnonceController::class,'update'])->name('annonceUpdatePost');
        route::delete('/delete/{id}',[AnnonceController::class,'destroy']);
    });
});
route::group(['prefix'=>'client'],function(){

});

route::middleware('myAuth')->group(function () {
    Route::get('/', [userController::class, 'welcome']);
    Route::get('/detail', [AnnonceController::class, 'show']);
    route::get('/detailAnnonce/{id}',[AnnonceController::class, 'show'])->name('detailAnnonce');
});

// Route::view("admin/users","Dashboard.usersControl");
    
route::view('/404','404');

Route::get('/login', [userController::class, 'login'])->name('login');
Route::post('/login', [userController::class, 'authLogin']);

Route::get('/register', [userController::class, 'register'])->name('register');
Route::post('/register', [userController::class, 'store']);

Route::post('/logout', [userController::class, 'logout'])->name('logout');