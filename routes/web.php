<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); 
*/

// route for test_layout, viewing navbar and footer
Route::get('/test-layout', function(){
    return view('test-layout');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// route for homepage
Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/product/{slug}', function ($slug) {
    return view('product.show', ['slug' => $slug]);
})->name('product.show');