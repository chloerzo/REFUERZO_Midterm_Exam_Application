<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route to display products
Route::get('/products', [ProductController::class, 'index']);
