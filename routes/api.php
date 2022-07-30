<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products',[ProductsController::class,'index']);
Route::post('/products',[ProductsController::class,'store']);
Route::get('/products/{id}',[ProductsController::class,'show']);
Route::put('/products/{id}/edit',[ProductsController::class,'update']);
Route::delete('/products',[ProductsController::class,'destroy']);

Route::get('/customers',[CustomerController::class,'index']);
Route::post('/customers',[CustomerController::class,'store']);
Route::get('/customers',[CustomerController::class,'show']);
Route::put('/customers',[CustomerController::class,'update']);
Route::delete('/customers',[CustomerController::class,'destroy']);

Route::get('/orders',[OrdersController::class,'index']);
Route::post('/orders',[OrdersController::class,'store']);
Route::get('/orders',[OrdersController::class,'show']);
Route::put('/orders',[OrdersController::class,'update']);
Route::delete('/orders',[OrdersController::class,'destroy']);

