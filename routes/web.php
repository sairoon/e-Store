<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommercrController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/',[EcommercrController::class,'index'])->name('home');
Route::get('/shop',[EcommercrController::class,'shop'])->name('shop');
Route::get('/store/{id}',[EcommercrController::class,'store'])->name('store');
Route::get('/product-detail',[EcommercrController::class,'productDetail'])->name('product-detail');
Route::get('/details/{id}',[EcommercrController::class,'details'])->name('details');
Route::get('/about',[EcommercrController::class,'aboutUs'])->name('about');
Route::get('/contact',[EcommercrController::class,'contactUs'])->name('contact');
Route::get('/faq',[EcommercrController::class,'faq'])->name('faq');
Route::get('/wishlist',[EcommercrController::class,'wishlist'])->name('wishlist');

Route::post('/cart-add/{id}',[CartController::class,'index'])->name('cart-add');
Route::get('/cart-show',[CartController::class,'show'])->name('cart-show');
Route::post('/cart-update/{id}',[CartController::class,'update'])->name('cart-update');
Route::get('/cart-remove/{id}',[CartController::class,'remove'])->name('cart-remove');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('/order-new',[CheckoutController::class,'newOrder'])->name('order-new');
Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('complete-order');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::post('/category',[CategoryController::class,'saveCategory'])->name('category');
    Route::get('/status/{id}',[CategoryController::class,'status'])->name('status');
    Route::post('/delete',[CategoryController::class,'categoryDelete'])->name('delete');
    Route::get('/edit/{id}',[CategoryController::class,'categoryEdit'])->name('edit');

    Route::get('/sub-category',[SubCategoryController::class,'index'])->name('sub-category');
    Route::post('/sub-category',[SubCategoryController::class,'saveSubCategory'])->name('sub-category');
    Route::get('/sub-status/{id}',[SubCategoryController::class,'status'])->name('sub-status');
    Route::post('/sub-delete',[SubCategoryController::class,'subCategoryDelete'])->name('sub-delete');
    Route::get('/sub-edit/{id}',[SubCategoryController::class,'subCategoryEdit'])->name('sub-edit');
    Route::post('/update-subcategory/{id}',[SubCategoryController::class,'subCategoryUpdate'])->name('update-subcategory');

    Route::get('/brand-add',[BrandController::class,'index'])->name('brand-add');
    Route::post('/brand-create',[BrandController::class,'createBrand'])->name('brand-create');
    Route::get('/brand-status/{id}',[BrandController::class,'statusBrand'])->name('brand-status');
    Route::post('/brand-delete',[BrandController::class,'deleteBrand'])->name('brand-delete');
    Route::get('/brand-edit/{id}',[BrandController::class,'editBrand'])->name('brand-edit');

    Route::get('/product-add',[ProductController::class,'index'])->name('product-add');
    Route::post('/product-create',[ProductController::class,'createProduct'])->name('product-create');
    Route::get('/product-manage',[ProductController::class,'manageProduct'])->name('product-manage');
    Route::get('/product-details/{id}',[ProductController::class,'detailProduct'])->name('product-details');
    Route::get('/product-edit/{id}',[ProductController::class,'editProduct'])->name('product-edit');
    Route::post('/product-update/{id}',[ProductController::class,'updateProduct'])->name('product-update');
    Route::post('/product-delete/{id}',[ProductController::class,'deleteProduct'])->name('product-delete');

});

