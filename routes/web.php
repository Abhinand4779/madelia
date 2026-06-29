<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

// User Routes (Frontend)
Route::get('/', function () { 
    $products = Product::all();
    return view('frontend.index', compact('products')); 
})->name('home');
Route::get('/shop', function () { 
    $products = Product::all();
    return view('frontend.shop', compact('products')); 
})->name('shop');

// Catch-all for category and subcategory pages (points to shop)
Route::get('/category_{name}', function ($name) { 
    $baseName = preg_replace('/-[a-zA-Z0-9]+$/', '', $name);
    $baseName = str_replace(['-', '.html'], [' ', ''], $baseName);
    
    $category = Category::where('name', 'LIKE', '%' . $baseName . '%')->first();
    if ($category) {
        $products = Product::where('category_id', $category->id)->get();
    } else {
        $products = Product::all();
    }
    return view('frontend.shop', compact('products')); 
})->where('name', '.*');

Route::get('/subcategory_{name}', function ($name) { 
    $baseName = preg_replace('/-[a-zA-Z0-9]+$/', '', $name);
    $baseName = str_replace(['-', '.html'], [' ', ''], $baseName);
    
    // Subcategories could just search by name too
    $category = Category::where('name', 'LIKE', '%' . $baseName . '%')->first();
    if ($category) {
        $products = Product::where('category_id', $category->id)->get();
    } else {
        $products = Product::all();
    }
    return view('frontend.shop', compact('products')); 
})->where('name', '.*');

// Product routes
Route::get('/product', function (Request $request) { 
    $product = Product::find($request->id);
    if (!$product) abort(404);
    return view('frontend.product', compact('product')); 
})->name('product');

Route::get('/product_{name}', function ($name) { 
    // Just load the first product for demo
    $product = Product::first();
    if (!$product) abort(404);
    return view('frontend.product', compact('product')); 
})->where('name', '.*');

Route::get('/product.html', function (Request $request) { 
    $product = Product::find($request->id);
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
Route::get('/login.html', function () { return view('admin.login'); });

// Admin Routes (Cloned Frontend)
Route::prefix('admin')->group(function () {
    Route::get('/login', function() { return view('admin.login'); })->name('admin.login');
    Route::get('/dashboard', function() { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/product/list', function() { 
        $products = Product::paginate(100);
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
