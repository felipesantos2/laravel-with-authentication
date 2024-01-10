<?php

use App\Livewire\Home;
use App\Livewire\LoginForm;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);

// LOGIN
Route::get('/login', LoginForm::class);
