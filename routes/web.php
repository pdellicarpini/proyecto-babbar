<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
    ->name('home');

Route::get('/nosotros', [\App\Http\Controllers\HomeController::class, 'about'])
    ->name('about');

// auth routes

Route::get('/ingresar', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('login');

Route::post('/ingresar', [\App\Http\Controllers\AuthController::class, 'process'])
    ->name('login.process');

Route::post('/salir', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('logout');

// products routes

Route::get('/catalogo', [\App\Http\Controllers\ProductsController::class, 'index'])
    ->name('catalog');

Route::get('/catalogo/{id}', [\App\Http\Controllers\ProductsController::class, 'show'])
    ->name('product.show')
    ->whereNumber('id');

Route::get('/admin/catalogo/agregar', [\App\Http\Controllers\ProductsController::class, 'create'])
    ->name('product.create')
    ->middleware('auth');

Route::post('/admin/catalogo/agregar', [\App\Http\Controllers\ProductsController::class, 'store'])
    ->name('product.store')
    ->middleware('auth');

// blog routes

Route::get('/blog', [\App\Http\Controllers\PostsController::class, 'index'])
    ->name('posts');

Route::get('/blog/{id}', [\App\Http\Controllers\PostsController::class, 'show'])
        ->name('post.show')
        ->whereNumber('id');
    

// admin CRUD routes

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])
    ->name('admin');

Route::get('/admin/blog/index', [\App\Http\Controllers\AdminController::class, 'blog'])
    ->name('admin.blog')
    ->middleware('auth');

Route::get('/admin/blog/agregar', [\App\Http\Controllers\PostsController::class, 'create'])
    ->name('post.create')
    ->middleware('auth');

Route::post('/admin/blog/agregar', [\App\Http\Controllers\PostsController::class, 'store'])
    ->name('post.store')
    ->middleware('auth');

Route::get('/admin/blog/{id}/eliminar', [\App\Http\Controllers\PostsController::class, 'delete'])
    ->name('post.delete')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/admin/blog/{id}/eliminar', [\App\Http\Controllers\PostsController::class, 'destroy'])
    ->name('post.destroy')
    ->whereNumber('id')
    ->middleware('auth');

Route::get('/admin/blog/{id}/editar', [\App\Http\Controllers\PostsController::class, 'edit'])
    ->name('post.edit')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/admin/blog/{id}/editar', [\App\Http\Controllers\PostsController::class, 'update'])
    ->name('post.update')
    ->whereNumber('id')
    ->middleware('auth');