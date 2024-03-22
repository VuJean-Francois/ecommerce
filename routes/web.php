<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductController::class,"viewAll"]);
Route::get('/details/{id}', [ProductController::class,"details"]);
Route::get('/add/{id}', [ProductController::class, "add"]);
Route::get('/cart', [ProductController::class, "cart"]);
Route::get('/create', [ProductController::class, "create"]);
Route::post('/create', [ProductController::class, "store"]);
Route::get('/modify', [ProductController::class, "modify"]);
