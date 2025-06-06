<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Client;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

Route::get('/', function () {
  $componentClass = Auth::check()
    ? \App\Livewire\Client\Home::class
    : \App\Livewire\Client\Landing::class;

  return app()->call($componentClass);
});

// Route::middleware('auth')->group(function () {

// });
Route::middleware('guest')->group(function () {
  Route::get('/aboutus', Client\Aboutus::class)->name('aboutus');
  Route::get('/login', Client\Auth\Login::class)->name('login');
  Route::get('/register', Client\Auth\Register::class)->name('register');
});
