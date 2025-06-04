<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Client;

// Route::middleware('auth')->group(function () {

// });

Route::middleware('guest')->group(function () {
  Route::get('/', Client\Landing::class)->name('landing');
  Route::get('/aboutus', Client\Aboutus::class)->name('aboutus');
  Route::get('/login', Client\Auth\Login::class)->name('login');
  Route::get('/register', Client\Auth\Register::class)->name('register');
});
