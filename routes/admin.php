<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');


Route::resource('users', UserController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);
Route::resource('posts', PostController::class);
Route::resource('pages', PageController::class);
Route::resource('categories', CategoryController::class);
Route::resource('banner/positions', BannerPositionController::class);
Route::resource('banner', BannerController::class);
Route::resource('menus', MenuController::class);
Route::resource('menu/items', MenuItemController::class);

