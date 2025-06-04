<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Client;

Route::get('/', Client\Landing::class)->name('landing');
