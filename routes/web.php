<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'index'])->name('page.index');

Route::get('/shop',[PageController::class,'shop'])->name('page.shop');

Route::get('/adminCreate', [AdminController::class, 'create']);

Route::get('/admin', [AdminController::class, 'show']);

Route::post('/adminCreate', [AdminController::class, 'create']);
