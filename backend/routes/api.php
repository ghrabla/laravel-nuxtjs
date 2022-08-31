<?php
// use App\Models\Product;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
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

// contact routes

Route::get('/contacts',[ContactController::class,'index']);
Route::post('/contacts',[ContactController::class,'store']);
Route::get('/contacts/{id}',[ContactController::class,'show']);
Route::put('/contacts/{id}',[ContactController::class,'Update']);
Route::delete('/contacts/{id}',[ContactController::class,'destroy']);
Route::get('/contacts/search/{fullname}',[ContactController::class,'search']);

// orders router
Route::get('/orders',[OrderController::class,'index']);
Route::get('/orders/{id}',[OrderController::class,'show']);
Route::post('/orders',[OrderController::class,'store']);
Route::put('/orders/{id}',[OrderController::class,'Update']);
Route::delete('/orders/{id}',[OrderController::class,'destroy']);


// admins routes 
Route::post('/adminregister',[AdminController::class,'register']);
Route::post('/adminlogin',[AdminController::class,'login']);

// users routes
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/users',[AuthController::class,'index']);
Route::get('/users/{id}',[AuthController::class,'show']);
Route::put('/users/{id}',[AuthController::class,'Update']);
Route::delete('/users/{id}',[AuthController::class,'destroy']);
Route::get('/users/search/{name}',[AuthController::class,'search']);

// product routes
Route::get('/products',[ProductController::class,'index']);
Route::get('/products/{id}',[ProductController::class,'show']);
Route::get('quant/products/{id}',[ProductController::class,'showone']);
Route::get('quant/products',[ProductController::class,'allproducts']);
Route::get('/products/search/{name}',[ProductController::class,'search']);
Route::put('/products/{id}',[ProductController::class,'update']); 

// protected routes
Route::group(['middleware' => ['auth:sanctum']],function(){
  Route::post('/products',[ProductController::class,'store']);
  Route::delete('/products/{id}',[ProductController::class,'destroy']);
  Route::post('/logout',[AuthController::class,'logout']);
  Route::get('auth/user',[AuthController::class,'user']);
  Route::post('/adminlogout',[AdminController::class,'logout']);


});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
