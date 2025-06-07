<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Client;
use App\Livewire\Client\Profile;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {
  Route::get('/profile/{username}', Profile\Index::class)->name('profile');
});

Route::get('/', function () {
  $componentClass = Auth::check()
    ? Client\Home::class
    : Client\Landing::class;

  return app()->call($componentClass);
});
Route::get('/aboutus', Client\Aboutus::class)->name('aboutus');


Route::middleware('guest')->group(function () {
  Route::get('/login', Client\Auth\Login::class)->name('login');
  Route::get('/register', Client\Auth\Register::class)->name('register');
});
