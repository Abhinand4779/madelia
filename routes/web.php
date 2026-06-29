<?php

use Illuminate\Support\Facades\Route;

// User Routes (Frontend)
Route::get('/', function () { return view('frontend.index'); })->name('home');
Route::get('/shop', function () { 
    $products = \App\Models\Product::all();
    return view('frontend.shop', compact('products')); 
})->name('shop');
Route::get('/product', function (\Illuminate\Http\Request $request) { 
    $product = \App\Models\Product::find($request->id);
    if (!$product) abort(404);
    return view('frontend.product', compact('product')); 
})->name('product');
Route::get('/product.html', function (\Illuminate\Http\Request $request) { 
    $product = \App\Models\Product::find($request->id);
    if (!$product) abort(404);
    return view('frontend.product', compact('product')); 
});
Route::get('/cart.html', function () { return view('frontend.cart'); });
Route::get('/checkout', function () { return view('frontend.checkout'); })->name('checkout');
Route::get('/checkout.html', function () { return view('frontend.checkout'); });
Route::get('/about', function () { return view('frontend.about'); })->name('about');
Route::get('/about.html', function () { return view('frontend.about'); });
Route::get('/contact', function () { return view('frontend.contact'); })->name('contact');
Route::get('/contact.html', function () { return view('frontend.contact'); });
Route::get('/our-story', function () { return view('frontend.our-story'); })->name('our-story');
Route::get('/our-story.html', function () { return view('frontend.our-story'); });
Route::get('/privacy-policy', function () { return view('frontend.privacy-policy'); })->name('privacy-policy');
Route::get('/privacy-policy.html', function () { return view('frontend.privacy-policy'); });
Route::get('/shipping', function () { return view('frontend.shipping'); })->name('shipping');
Route::get('/shipping.html', function () { return view('frontend.shipping'); });
Route::get('/shipping-return', function () { return view('frontend.shipping-return'); })->name('shipping-return');
Route::get('/shipping-return.html', function () { return view('frontend.shipping-return'); });
Route::get('/profile', function () { return view('frontend.profile'); })->name('profile');
Route::get('/profile.html', function () { return view('frontend.profile'); });
Route::get('/wishlist', function () { return view('frontend.wishlist'); })->name('wishlist');
Route::get('/wishlist.html', function () { return view('frontend.wishlist'); });
Route::get('/shop.html', function () { return view('frontend.shop'); });


// Admin Routes (Cloned Frontend)
Route::prefix('admin')->group(function () {
    Route::get('/login', function() { return view('admin.login'); })->name('admin.login');
    Route::get('/dashboard', function() { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/product/list', function() { 
        $products = \App\Models\Product::paginate(100);
        return view('admin.products', compact('products')); 
    })->name('admin.products');
    Route::get('/product/create-or-update', function() { return view('admin.product-create'); })->name('admin.product.create');
    Route::get('/categories', function() { return view('admin.categories'); })->name('admin.categories');
    Route::get('/subcategories', function() { return view('admin.subcategories'); })->name('admin.subcategories');
    Route::get('/brands', function() { return view('admin.brands'); })->name('admin.brands');
    Route::get('/order/list', function() { return view('admin.orders'); })->name('admin.orders');
    Route::get('/hsn-codes', function() { return view('admin.hsn-codes'); })->name('admin.hsn-codes');
    Route::get('/coupon-codes', function() { return view('admin.coupon-codes'); })->name('admin.coupons');
    Route::get('/reviews', function() { return view('admin.reviews'); })->name('admin.reviews');
    Route::get('/settings', function() { return view('admin.settings'); })->name('admin.settings');
    Route::get('/shipping-charges', function() { return view('admin.shipping-charges'); })->name('admin.shipping');
    Route::get('/ads', function() { return view('admin.ads'); })->name('admin.ads');
    Route::get('/ads/dynamic', function() { return view('admin.dynamic-products'); })->name('admin.dynamic-products');
    Route::get('/pages', function() { return view('admin.pages'); })->name('admin.pages');
    Route::get('/home-brands', function() { return view('admin.home-brands'); })->name('admin.home-brands');
    Route::get('/main-titles', function() { return view('admin.main-titles'); })->name('admin.main-titles');

});
