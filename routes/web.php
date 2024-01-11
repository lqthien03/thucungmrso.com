<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/index', function () {
    return view('index');
});
Route::get('/home', [PageController::class, 'index'])->name('pages.home');


Route::get('/search', [SearchController::class,'search'])->name('products.search');
Route::get('introduce', [PageController::class, 'introduce']);
Route::get('service', [PageController::class, 'service']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('doctin/{link}', [BlogController::class, 'detail']);
Route::get('recruitment', [PageController::class, 'recruitment']);
Route::get('contact', [PageController::class, 'contact']);
Route::get('shopguide', [PageController::class, 'shopguide']);
Route::get('returnpolicy', [PageController::class, 'returnpolicy']);
Route::get('warrantypolicy', [PageController::class, 'warrantypolicy']);
Route::get('privacypolicy', [PageController::class, 'privacypolicy']);
Route::get('paymentpolicy', [PageController::class, 'paymentpolicy']);
Route::get('san-pham', [PageController::class,'product']);
Route::get('category1/{id}', [PageController::class, 'category1']);
Route::get('category2/{id}', [PageController::class, 'category2']);

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->middleware(['auth', 'verified'])->name('cart.add');


Route::get('cart', [CartController::class, 'index'])->middleware(['auth', 'verified'])->name('cart');
Route::get('{link}', [ProductController::class, 'detail']);
