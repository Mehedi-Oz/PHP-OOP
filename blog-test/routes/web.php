<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

Route::get('/', [BlogController::class, 'index'])->name('/');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/new', [CategoryController::class, 'store'])->name('category.new');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/status', [CategoryController::class, 'status'])->name('category.status');
    Route::get('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');
});
