<?php
// use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Product;
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

// Route::get('/products',[ProductController::class,'index']);
// Route::post('/products',[ProductController::class,'store']);


// Route::resource('products', ProductController::class);

// public routes

// orders router
Route::get('/orders',[OrderController::class,'index']);
Route::get('/orders/{id}',[OrderController::class,'show']);
Route::post('/orders',[OrderController::class,'store']);
Route::put('/orders/{id}',[OrderController::class,'Update']);
Route::delete('/orders/{id}',[OrderController::class,'destroy']);

// users router
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

// product router
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::get('/products/search/{name}',[ProductController::class,'search']);

// protected route
Route::group(['middleware' => ['auth:sanctum']],function(){
  Route::post('/products',[ProductController::class,'store']);
  Route::put('/products/{id}',[ProductController::class,'update']);
  Route::delete('/products/{id}',[ProductController::class,'destroy']);
  Route::post('/logout',[AuthController::class,'logout']);


});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
