<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\CategoryDetailController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\BillController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\SearchController;

//BE
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CategoryDetailController as AdminCategoryDetailController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\AdminController as AdminAdminController;
use App\Http\Controllers\Admin\FAQController as AdminFAQController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\BillController as AdminBillController;
use App\Http\Controllers\Admin\ProductSliderController as AdminProductSliderController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;



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

Auth::routes();


Route::get('/', [IndexController::class, 'home'])->name('homepage');
Route::get('danh-muc/{slug}', [CategoryController::class, 'category'])->name('category');
Route::get('laptop/{slug}', [CategoryDetailController::class, 'category_detail'])->name('category_detail');
Route::get('san-pham/{slug}', [ProductController::class, 'product'])->name('product');
Route::get('san-pham/add-to-cart/{id}', [CartController::class, 'AddToCart'])->name('addtocart');
Route::get('gio-hang/tang-san-pham/{id}', [CartController::class, 'incrementCart'])->name('incrementBtn');
Route::get('gio-hang/giam-san-pham/{id}', [CartController::class, 'decrementCart'])->name('decrementBtn');
Route::get('xoa-san-pham/{id}', [CartController::class, 'DeleteCart'])->name('deleteCart');
Route::get('gio-hang', [CartController::class, 'showCart']);
Route::post('gio-hang', [CartController::class, 'showCart']);
Route::get('thanh-toan', [CheckoutController::class, 'checkoutget']);
Route::post('thanh-toan', [CheckoutController::class, 'checkoutpost']);
Route::get('don-hang', [BillController::class, 'cartlist']);
Route::get('don-hang/{id}', [BillController::class, 'cartshow'])->name('cartshow');
Route::get('received/{id}', [BillController::class, 'received'])->name('received');
Route::get('tin-tuc', [NewsController::class, 'news_list']);
Route::get('tin-tuc/{id}', [NewsController::class, 'news'])->name('news');
Route::get('search', [SearchController::class, 'search'])->name('search');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [HomeController::class, 'adminView'])->name('dashboard');
        Route::resource('category', AdminCategoryController::class);
        Route::resource('categorydetail', AdminCategoryDetailController::class);
        Route::resource('user', AdminUserController::class);
        Route::resource('admin', AdminAdminController::class);
        Route::resource('faq', AdminFAQController::class);
        Route::resource('product', AdminProductController::class);
        Route::resource('productslider', AdminProductSliderController::class);
        Route::resource('news', AdminNewsController::class);
        Route::resource('slider', AdminSliderController::class);
        Route::get('bill', [AdminBillController::class, 'index'])->name('bill');
        Route::get('bill-detail/{id}', [AdminBillController::class, 'show'])->name('billdetail');
    });
});