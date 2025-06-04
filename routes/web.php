<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Client;

Route::get('/', Client\Landing::class)->name('landing');
Route::get('/aboutus', Client\Aboutus::class)->name('aboutus');
