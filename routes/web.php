<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\brandController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Models\brand;

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
Route::get('/getsubcategories', [ProductController::class,'getSubcategories']);
Route::get('/view',[brandController::class,'brandview']);
Route::post('/brands', [brandController::class, 'store'])->name('brands.store');
Route::get('/table',[brandController::class,'brandTables'])->name('brands.table');
Route::get('/edit/{id}',[brandController::class,'brandedit'])->name('brands.edit');
Route::post('/update/{id}',[brandController::class,'brandUpdate']);
Route::get('/delete/{id}',[brandController::class,'branddelete'])->name('delete.edit');
// category
Route::get('/cview',[categoryController::class,'viewcategory']);
Route::post('/category', [categoryController::class, 'Cstore'])->name('category.store');
Route::get('/ctable',[categoryController::class,'categoryTables'])->name('category.table');
Route::get('/cedit/{id}',[categoryController::class,'categoryedit'])->name('category.edit');
Route::post('/cupdate/{id}',[categoryController::class,'categoryUpdate']);
Route::get('/cdelete/{id}',[categoryController::class,'categorydelete'])->name('delete.category');
// sub-category
Route::get('/sview',[categoryController::class,'viewsubcategory']);
// Route::get('/sview',[categoryController::class,'viewsubcategory']);
Route::post('/sub', [categoryController::class, 'sstore'])->name('subcat.store');
Route::get('/stable',[categoryController::class,'subtables'])->name('sub.table');
Route::get('/sedit/{id}',[categoryController::class,'subcategoryedit'])->name('sub.edit');
Route::post('/supdate/{id}',[categoryController::class,'subUpdate']);
Route::get('/sdelete/{id}',[categoryController::class,'subdelete'])->name('subdelete.edit');
// product
Route::get('/pview',[productController::class,'prview']);
Route::post('/pstore',[productController::class,'pstore']);
// checkout
Route::post('/check',[checkoutController::class,'checkout'])->name('checkout.view');
Route::get('/thank',[checkoutController::class,'thanku'])->name('thanks.view');

Route::any('/checks',[checkoutController::class,'checkouts'])->name('checkout.views');
// for add colors
Route::get('/cform',[brandController::class,'cview'])->name('color.view');
Route::post('/cform',[brandController::class,'cstore'])->name('color.save');
Route::get('/cotabl',[brandController::class,'ctable'])->name('color.table');
Route::get('/ccedit/{id}',[brandController::class,'coloredit'])->name('color.edit');
Route::post('/coupdate/{id}',[brandController::class,'colorUpdate']);
Route::get('/codelete/{id}',[brandController::class,'colordelete'])->name('delete.color');

// for add sizes
Route::get('/sform',[brandController::class,'sview'])->name('size.view');
Route::post('/sform',[brandController::class,'sstore'])->name('size.save');
Route::get('/sitabl',[brandController::class,'stable'])->name('size.table');
Route::get('/zedit/{id}',[brandController::class,'sizeedit'])->name('size.edit');
Route::post('/siupdate/{id}',[brandController::class,'sizeUpdate']);
Route::get('/sidelete/{id}',[brandController::class,'sizedelete'])->name('delete.size');
// Route::get('/bview',[productController::class,'brview']);
// routes/web.php
// Route::post('/get-subcategories', 'ProductController@getSubcategories')->name('get.subcategories');
// front-view
Route::get('/frview',[frontController::class,'viewfhome']);

// back-end Routes
Route::get('/contact', [frontController::class,'show']);
Route::get('/hom', [frontController::class,'home']);
// Route::get('/cart', [frontController::class,'carts']);
Route::get('/shopgrid', [frontController::class,'shop']);
Route::any('/detail/{id}', [frontController::class,'detail']);

Route::get('/pr', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart/get', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


// adding discount coupen
Route::post('/apply-discount', [CartController::class, 'applyDiscount'])->name('apply-discount');
Route::post('/clear-discount', [CartController::class, 'clearDiscount'])->name('clear-discount');


Route::post('/order', [checkoutController::class, 'store'])->name('storedata');

// order details

Route::get('/orderdetails', [checkoutController::class, 'detail'])->name('order-details');
Route::get('/details/{id}', [checkoutController::class, 'details'])->name('order-details2');

Route::get('/', function () {
    return view('home');
});
