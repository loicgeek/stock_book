<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/", [HomeController::class, 'home']);

Route::get("/login", [AuthController::class, 'getLogin']);

Route::get("/products", [ProductController::class, 'index'])->name('products.index');
Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
Route::post("/products", [ProductController::class, 'save'])->name('products.save');
Route::get("/products/{id}", [ProductController::class, 'details'])->name("details");
Route::put("/products/{id}", [ProductController::class, 'update']); //patch, put
Route::get("/products/{id}/edit", [ProductController::class, 'edit']);
Route::delete("/products/{id}", [ProductController::class, 'destroy']);
