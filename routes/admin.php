<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Livewire\Admin\PostsIndex;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->only(['index','show','update'])->names('admin.users');

Route::resource('roles',RoleController::class)->names('admin.roles');

Route::resource('permisos',  PermisoController::class)->names('admin.permisos');

Route::resource('categorias', CategoriaController::class)->except('edit')->names('admin.categorias');

Route::resource('tags', TagController::class)->except('edit')->names('admin.tags');

Route::resource('posts', PostController::class)->except('edit')->names('admin.posts');

