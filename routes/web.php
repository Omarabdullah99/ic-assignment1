<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/profile', function(){
    return view('profile.index');
})->name('profile.index');

Route::get('/login', function(){
    return view('layouts.partials.login');
})->name('login');

Route::get('/register', function(){
    return view('layouts.partials.register');
})->name('register');

Route::get('/categories/{category:slug}', function(){
    return view('categories.show');
})->name('categories.show');

Route::get('/posts/{post:slug}', function(){
    return view('single.index');
})->name('single.index');


