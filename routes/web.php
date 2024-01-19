<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TrackingCustController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductCustController;
use App\Http\Controllers\CustomerController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'index']);

// shopping cart
Route::group(['middleware' => 'auth'], function () {
    // cart
    Route::resource('trolley', 'App\Http\Controllers\CartController');
    //kosongkan trolley
    Route::patch('kosongkan/{id}', [CartController::class, 'kosongkan']);
    //tracking
    Route::get('tracking', [TrackingCustController::class, 'index']);
    // cart detail
    Route::resource('cartdetail', 'App\Http\Controllers\CartDetailController');
    //order
    Route::resource('order', 'App\Http\Controllers\DetailOrderController');
    //history
    Route::resource('history', 'App\Http\Controllers\HistoryController');
});

Route::resource('product', 'App\Http\Controllers\ProductCustController');
Route::get('/kategori', [homeController::class, 'index'])->middleware(['auth']);;
Route::get('/kategori/{id}', [homeController::class, 'kategoribyid']);
Route::get('/produk/{id}', [homeController::class, 'produkdetail']);

Route::get('/kategori/product/{id}', [homeController::class, 'produkdetail']);


//search tracking
Route::get('/tracking/search', [TrackingCustController::class, 'search']);
//search produk
Route::get('/product/search', [ProductCustController::class, 'search']);
//search customer
Route::get('/admin/customer/search', [CustomerController::class, 'search'])->middleware(['auth']);

Route::get('about', [homeController::class, 'about']);




Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('produk', 'App\Http\Controllers\ProductController')->middleware(['auth']);;
    Route::resource('katalog', 'App\Http\Controllers\KatalogController')->middleware(['auth']);;
    Route::resource('transaksi', 'App\Http\Controllers\TransaksiController')->middleware(['auth']);;
    Route::resource('customer', 'App\Http\Controllers\CustomerController')->middleware(['auth']);;
    // image
    Route::get('image', [ImageController::class, 'index']);
    // simpan image
    Route::post('image', [ImageController::class, 'store']);
    // hapus image by id
    Route::delete('image/{id}', [ImageController::class, 'destroy']);

    Route::post('imagekategori', [KatalogController::class, 'uploadimage']);
    // hapus image kategori
    Route::delete('imagekategori/{id}', [KatalogController::class, 'deleteimage']);
    // upload image produk
    Route::post('produkimage', [ProductController::class, 'uploadimage']);
    // hapus image produk
    Route::delete('produkimage/{id}', [ProductController::class, 'deleteimage']);
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
