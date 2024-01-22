<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/index', function () {
    return view('index');
});
// Route::get('/home', [PageController::class, 'index'])->name('pages.home');


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
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    Route::post('/add-to-cart/{id}', [CartController::class,'addtoCart'])->name('cart.add');
});
Route::post('/payment', [CartController::class, 'payment'])->name('cart.payment');
// routes/web.php
Route::post('/update-cart-item', 'CartController@updateCartItem');

Route::get('/remove-from-cart/{productId}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::post('/submit-contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('{link}', [ProductController::class, 'detail']);

