<?php

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








route::get('/',[userController::class,'index']);
route::group(['prefix' => 'admin'],function(){
    route::get('tags',[TagsController::class,'index']);
    route::post('tags',[TagsController::class,'store']);
    route::get('tags/{id}',[TagsController::class,'show']);
    // route::get('tags/{id}/edit',[TagsController::class,'edit']);
    route::post('tags/update/{id}',[TagsController::class,'update'])->name('update');
    route::post('tags/delete/{tags:id}',[TagsController::class,'destroy']);
    route::get('roles',[RoleController::class,'index']);
});
route::group(['prefix'=>'company'],function(){
    route::get('company',[AnnonceController::class,'index']);
    route::get('company/create',[AnnonceController::class,'create']);
    route::post('company',[AnnonceController::class,'store']);
    route::get('company/{id}',[AnnonceController::class,'show']);
    route::get('company/edit/{id}',[AnnonceController::class,'edit']);
    route::post('company/{id}',[AnnonceController::class,'update']);
    route::delete('company/{id}',[AnnonceController::class,'destroy']);
});
route::group(['prefix'=>'client'],function(){

});
route::get('admin/tags',[TagsController::class,'index']);
route::post('admin/tags',[TagsController::class,'store']);

route::middleware('myAuth')->group(function () {
    // Route::get('/', [userController::class, 'welcome']);
    Route::get('/detail', [AnnonceController::class, 'show']);

    Route::get('/company', [AnnonceController::class, 'index']);
    Route::get('/formannonce', [AnnonceController::class, 'create']);
    Route::post('/formannonce', [AnnonceController::class, 'store']);
    Route::get('/formEdit/{id}', [AnnonceController::class, 'edit']);
    Route::post('/formEdit/{id}', [AnnonceController::class, 'update'])->name('update');
    // Route::get('/delete/{id}', [AnnonceController::class, 'destroy'])->name('delete');
    route::get('/detailAnnonce/{id}',[AnnonceController::class, 'show'])->name('detailAnnonce');
});
    


    Route::get('/register', [userController::class, 'register'])->name('register');
    Route::get('/login', [userController::class, 'login'])->name('login');

    Route::post('/login', [userController::class, 'authLogin']);
    Route::post('/register', [userController::class, 'store']);
    Route::post('/logout', [userController::class, 'logout'])->name('logout');
