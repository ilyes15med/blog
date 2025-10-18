<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\InviteController;


Route::get('/',[InviteController::class,'index'])->name('post.index');
 
Route::get('/Subscribe/user',function(){

    return view('auth.subscribe');
})->name('subscribe.user');
Route::get('/login/admin',function(){
    return view('auth.Seconnecter');
})->name('SeConnecterForm');
Route::post('/login/admin',[AuthController::class,'Admin'])->name('Seconnecter.admin');
Route::get('/logout',[AuthController::class,'AdminDeconnecter'])->name('deconnecter.admin');

//router controle panel

//add category

Route::get('/Category/index',[CategoryController::class,'index'])->name('categorie.index');

Route::get('/Category/form',[CategoryController::class,'Showform'])->name('Category.form');

Route::post('/Category',[CategoryController::class,'store'])->name('categorie.store');


//update categorie soit modifier soit supprimer

Route::get('/Category/delete/{id}',[CategoryController::class,'destroy'])->name('categorie.destroy');

Route::get('/Category/{id}/edit',[CategoryController::class,'edit'])->name('categorie.edit');

Route::put('/Category/{id}',[CategoryController::class,'update'])->name('Category.update');

Route::get('/Category/{id}',[CategoryController::class,'show'])->name('categorie.show');

//add post:

Route::get('/Category/{id}/Posts',[PostController::class,'index'])->name('posts.index');

Route::get('/Category/{id}/Post/form',[PostController::class,'showform'])->name('formAjouterPost.show');

Route::post('/Category/{id}/Post/create',[PostController::class,'store'])->name('post.store');


//modifier post
Route::get('/Category/{idcategorie}/Post/{idpost}/edit',[PostController::class,'edit'])->name('post.edit');
Route::put('/Category/{idcategorie}/Post/{idpost}',[PostController::class,'update'])->name('post.update');

//delete post

Route::get('/Category/{idCategorie}/Post/delete/{idPost}',[PostController::class,'delete'])->name('post.delete');

//invité
Route::get('/posts/{idpost}',[InviteController::class,'PostShow'])->name('post.postshow');