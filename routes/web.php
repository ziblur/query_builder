<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/products",[ProductController::class,"listProducts"]);
Route::get("/products/create",[ProductController::class,"createProducts"]);
Route::post("/products",[ProductController::class,"storeProducts"])->name("storeProducts");
Route::get("/products/{id}",[ProductController::class,"showProduct"]);
Route::get("/products/{id}/edit",[ProductController::class,"editProducts"]);
Route::put("/products/{id}",[ProductController::class,"updateProducts"])->name("updateProducts");
Route::delete("/products/{id}",[ProductController::class,"deleteProducts"]);