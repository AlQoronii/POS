<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('menu')->group(function(){

    Route::get('/category/food-beverage', [MenuController::class, 'food']);
    Route::get('/category/beauty-health', [MenuController::class, 'beauty']);
    Route::get('/category/home-care', [MenuController::class, 'homecare']);
    Route::get('/category/baby-kid', [MenuController::class, 'baby']);
    
});

Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

Route::get('/penjualan', function (){
    return view('penjualan');
});
