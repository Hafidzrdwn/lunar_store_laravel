<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Livewire\Client;
use App\Livewire\Client\Profile;
use App\Livewire\Admin;

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
  Route::get('/admin', Admin\Dashboard::class)->name('admin.dashboard');
});
