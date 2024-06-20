<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyPortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TagController;

Route::get('/set-locale/{lang}', function ($lang) {
    session()->put('locale', $lang);
    return redirect()->back();
})->name('set-locale');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/myportfolio', [MyPortfolioController::class, 'index'])->name('myportfolio');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/tags/{tag}', TagController::class);
