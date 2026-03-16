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
    
    Route::get('/cart', function () {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    })->name('cart');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');


    // add to cart
    Route::post('/cart/add', function (\Illuminate\Http\Request $request) {

        $product = \App\Models\Product::findOrFail($request->product_id);

        $cart = session()->get('cart', []);

        $quantity = $request->quantity ?? 1;
        $variation = $request->variation;

        $key = $product->id . '-' . $variation;

        if(isset($cart[$key])){

            $cart[$key]['quantity'] += $quantity;

        } else {

            $cart[$key] = [
                "name" => $product->name,
                "variation" => $variation,
                "price" => $product->base_price,
                "image" => $product->image,
                "quantity" => $quantity
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success','Item successfully added to cart!');
    })->name('cart.add');


    // checkout
    Route::post('/cart/checkout', function () {

        session()->forget('cart');

        return redirect()->route('cart')
            ->with('success','Order successful! Thank you for your purchase.');

    })->name('cart.checkout');

    // update cart item quantity
    Route::post('/cart/update', function (\Illuminate\Http\Request $request) {
        $cart = session()->get('cart', []);

        $key = $request->key;
        $action = $request->action;

        if(isset($cart[$key])){

            if($action == "increase"){
                $cart[$key]['quantity']++;
            }

            if($action == "decrease"){
                $cart[$key]['quantity']--;

                if($cart[$key]['quantity'] <= 0){
                    unset($cart[$key]);
                }
            }

        }

        session()->put('cart', $cart);

        return redirect()->route('cart');

    })->name('cart.update');

    // remove item from cart
    Route::post('/cart/remove', function (\Illuminate\Http\Request $request) {

        $cart = session()->get('cart', []);

        if(isset($cart[$request->key])){
            unset($cart[$request->key]);
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success','Item removed from cart.');

    })->name('cart.remove');


    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
