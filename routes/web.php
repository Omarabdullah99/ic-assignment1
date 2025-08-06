<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

// Route::get('/categories/{category:slug}', FrontCategoryController::class)->name('blog.categories');
Route::get('/categories/{category:slug}', function(){
    return view('categories.show');
})->name('categories.show');
