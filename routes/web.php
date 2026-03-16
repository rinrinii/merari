<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;

/* Route::get('/', function () {
    return view('welcome');
}); 
*/

// route for test_layout, viewing navbar and footer
Route::get('/test-layout', function(){
    return view('test-layout');
});

// route for homepage
Route::get('/', function () {
    $products = Product::take(3)->get(); // spotlight products
    return view('homepage', compact('products'));
})->name('home');

// route for informational pages; faqs, about
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/about', 'about')->name('about');

// route for shop
Route::get('/shop', function () {
    $products = Product::all();
    return view('shop', compact('products'));
})->name('shop');

Route::get('/product/{slug}', function ($slug) {

    $product = Product::where('slug', $slug)
        ->with('variations')
        ->firstOrFail();

    return view('product.show', compact('product'));

})->name('product.show');


// guest routes; visible only when not logged in
Route::middleware('guest')->group(function () {

    // show pages
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');

    // form submissions
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

});

// authenticated routes; visible when logged in
Route::middleware('auth')->group(function () {
    Route::view('/cart', 'cart')->name('cart');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // add to cart (temporary)
    Route::post('/cart/add', function () {
        return redirect()->route('cart');
    })->name('cart.add');

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
