<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("login", function () {
    return view("login");
})->name("login");
Route::get("register", function () {
    return view("register");
})->name("register");


// Route::get('jj', function () {
//     return view('admin.detail');
// });




Route::controller(AccountController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::post('auth', 'auth')->name('auth');
    Route::any('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');
    Route::any('delete/{user}', 'destroy')->name("account.destroy");
     
// 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

});


// index page route for both Admin and User
Route::get('/', [AdminController::class, 'index'])->name("admin.dashboard");

Route::group(['middleware' => ["auth", "admin"], 'prefix' => 'admin'], function () {
    Route::get('accounts', [AdminController::class, 'allAccounts'])->name("admin.accounts");
    
    Route::resource('categories', CategoryController::class)->names([
    'index' => 'categories.index',
    'create' => 'categories.create',
    'store' => 'categories.store',
    'show' => 'categories.show',
    'edit' => 'categories.edit',
    'update' => 'categories.update',
    'destroy' => 'categories.destroy',
]);
    Route::resource('products', ProductController::class)->names([
    'index' => 'products.index',
    'create' => 'products.create',
    'store' => 'products.store',
    'show' => 'products.show',
    'edit' => 'products.edit',
    'update' => 'products.update',
    'destroy' => 'products.destroy'
]);
     Route::resource('order', OrderController::class)->names([
    'index' => 'order.index',
    'create' => 'order.create',
    'store' => 'order.store',
    'show' => 'order.show',
    'edit' => 'order.edit',
    'update' => 'order.update',
    'destroy' => 'order.destroy'
]);
    
});


Route::group(['middleware' => ["auth", "user"]], function () {
    // Route::get('/', [UserController::class, 'index'])->name("user.home");
});
  Route::get('/', [AdminController::class, 'index'])->name("admin.dashboard");


    Route::controller(UserController::class)->group(function(){
        Route::get('index', 'index')->name('user.index');
        Route::get('shop', 'shop')->name('user.shop');
        Route::get('checkout', 'checkout')->name('user.checkout');

        Route::get('order', 'order')->name('user.order');
         Route::get('single-product/{product}', 'singleProduct')->name('user.single-product');
        
         

    });
Route::resource('cart', CartController::class)->names([
    'index' => 'cart.index',
    'create' => 'cart.create',
    'show' => 'cart.show',
    'edit' => 'cart.edit',
    'update' => 'cart.update',
    'destroy' => 'cart.destroy'
])->except(['store']);


Route::any('cart/{id}', [CartController::class, 'store'])->name('cart.store');



