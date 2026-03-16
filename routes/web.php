<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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
    return view('homepage');
})->name('home');

// route for informational pages; faqs, about
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/about', 'about')->name('about');

// route for shop
Route::view('/shop', 'shop')->name('shop');

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

// temporary product data, to be replaced with database data in the future
Route::get('/product/{slug}', function ($slug) {

    //variation presets
    $braceletVariations = [
        ['name' => '13cm - 14cm', 'price' => 80],
        ['name' => '15cm - 16cm', 'price' => 80],
        ['name' => '17cm - 18cm', 'price' => 80],
        ['name' => 'Custom Size', 'price' => 90],
    ];

    $keychainVariations = [
        ['name' => 'Standard', 'price' => 60],
        ['name' => 'Custom Charm', 'price' => 75],
    ];


    //products

    $products = [

        'pompompurin-bracelet' => [
            'name' => 'Sanrio Pompompurin Bracelet',
            'category' => 'Bracelet',
            'image' => '/images/products/productimg_1.png',
            'description' => 'Sanrio Characters Inspired Chained Bracelets.',
            'variations' => $braceletVariations
        ],

        'cinnamoroll-bracelet' => [
            'name' => 'Sanrio Cinnamoroll Bracelet',
            'category' => 'Bracelet',
            'image' => '/images/products/productimg_2.png',
            'description' => 'Cute Cinnamoroll themed handmade bracelet.',
            'variations' => $braceletVariations
        ],

        'mymelody-bracelet' => [
            'name' => 'Sanrio My Melody Bracelet',
            'category' => 'Bracelet',
            'image' => '/images/products/productimg_3.png',
            'description' => 'My Melody themed handmade bracelet.',
            'variations' => $braceletVariations
        ],

        'pompompurin-keychain' => [
            'name' => 'Sanrio Pompompurin Keychain',
            'category' => 'Keychain',
            'image' => '/images/products/productimg_keychain1.png',
            'description' => 'Cute Sanrio themed keychain.',
            'variations' => $keychainVariations
        ],

    ];


    //find product

    if (!isset($products[$slug])) {
        abort(404);
    }

    $product = $products[$slug];

    return view('product.show', compact('product'));

})->name('product.show');