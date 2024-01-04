<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// BRAND
Route::post('brand', [BrandController::class, 'store']);
Route::get('brand/{id}', [BrandController::class, 'show']);
Route::get('brand', [BrandController::class, 'showAll']);
Route::put('brand/{id}', [BrandController::class, 'edit']);
Route::delete('brand/{id}', [BrandController::class, 'delete']);

// PRODUCT
Route::post('product' , [ProductController::class, 'store']);