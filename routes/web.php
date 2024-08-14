<?php

use App\Http\Controllers\BooklistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', function(){
//     return view('Item.item');
// });
Route::resource('/item', ItemController::class);
Route::resource('/product',ProductController::class);
Route::resource('/employer', EmployerController::class);
Route::resource('/booklist', BooklistController::class);
Route::resource('/category', CategoryController::class);
