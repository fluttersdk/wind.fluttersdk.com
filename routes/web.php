<?php

use App\Http\Controllers\DocController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('pdf', [HomeController::class, 'pdf'])->name('pdf');

Route::get('{page?}', [DocController::class, 'page'])->name('docs')->where('page', '(.*)');
