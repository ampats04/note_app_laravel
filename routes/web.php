<?php

use App\Http\Controllers\makeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [makeController::class, 'welcome'])->name('welcome');
