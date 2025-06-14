<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Livewire\Client;
use App\Livewire\Client\Profile;
use App\Livewire\Admin;
use App\Livewire\Admin\MasterData;
use App\Livewire\Admin\MasterData\ProductData;

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AdminGuestMiddleware;

// ====================
// Public Routes
// ====================
Route::get('/', function () {
  $componentClass = Auth::guard('web')->check()
    ? Client\Home::class
    : Client\Landing::class;

  return app()->call($componentClass);
});
Route::get('/aboutus', Client\Aboutus::class)->name('aboutus');

// ====================
// Guest Routes
// ====================

// Client guest
Route::middleware('guest')->group(function () {
  Route::get('/login', Client\Auth\Login::class)->name('login');
  Route::get('/register', Client\Auth\Register::class)->name('register');
});

// Admin guest
Route::middleware([AdminGuestMiddleware::class])->group(function () {
  Route::get('/admin/login', Admin\Login::class)->name('admin.login');
});

// ====================
// Authenticated Client Routes
// ====================
Route::middleware('auth')->group(function () {
  Route::get('/profile/{username}', Profile\Index::class)->name('profile');
});

// ====================
// Authenticated Admin Routes
// ====================
Route::middleware([AdminMiddleware::class])->group(function () {
  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', Admin\Dashboard::class)->name('dashboard');

    // MASTER DATA

    // ====================
    // USER ADMINS
    // ====================
    Route::get('/user_admin', MasterData\UserAdmins::class)->name('user_admin');
    Route::get('/user_admin/data', [UserAdminController::class, 'index'])->name('user_admin.data');

    // ====================
    // USERS
    // ====================
    Route::get('/users', Admin\MasterData\Users::class)->name('users');
    Route::get('/users/data', [UserController::class, 'index'])->name('users.data');

    // ====================
    // PRODUCT CATEGORIES
    // ====================
    Route::get('/categories', ProductData\Categories::class)->name('products.categories');
    Route::get('/categories/data', [ProductCategoryController::class, 'index'])->name('products.categories.data');

    // ====================
    // PRODUCTS
    // ====================
    Route::get('/products', ProductData\Products::class)->name('products');
    Route::get('/products/data', [ProductController::class, 'index'])->name('products.data');

    // ====================
    // PRODUCT TYPES
    // ====================
    Route::get('/product_types', ProductData\Types::class)->name('product_types');
    Route::get('/product_types/data', [ProductTypeController::class, 'index'])->name('product_types.data');

    // ====================
    // PRODUCT DETAILS
    // ====================
    Route::get('/product_details', ProductData\Details::class)->name('product_details');
    Route::get('/product_details/data', [ProductDetailController::class, 'index'])->name('product_details.data');
  });
});
