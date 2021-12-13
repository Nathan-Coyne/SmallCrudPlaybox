<?php

use App\Http\Controllers\WishListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function(){
    $wishList = (new ProductController)->getProducts()->toArray();
    return view('test.wishList', compact('wishList'));
});

Route::put('/category', [WishListController::class, 'createNewWishList']);

Route::delete('/category', [WishListController::class, 'deleteWishList']);

Route::patch('/category', [WishListController::class, 'updateWishList']);

Route::get('/product', function(){
    $productList = (new ProductController)->getProductsByCategoryId($_GET['id'])->toArray();
    return view('test.productList', compact('productList'));
});

Route::put('/product', [ProductController::class, 'createNewProduct']);

Route::delete('/product', [ProductController::class, 'deleteProduct']);

Route::patch('/product', [ProductController::class, 'updateProduct']);

