<?php

use App\Http\Controllers\PredictionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// ===================================================
// Route::prefix('')->group(function(){
//     Route::get('/', [HomeController::class, 'home'])->name('home');
//     Route::get('/shop', [HomeController::class, 'shopPage'])->name('shop.page');
//     Route::get('/single-product/{product_slug}', [HomeController::class, 'productDetails'])->name('productdetail.page');
//     Route::get('/shopping-cart', [CartController::class, 'cartPage'])->name('cart.page');
//     Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to.cart');
//     Route::get('/remove-from-cart/{cart_id}', [CartController::class, 'removeFromCart'])->name('removefrom.cart');

//     /*Authentication routes for Customer/Guest */
//     Route::get('/register', [RegisterController::class, 'registerPage'])->name('register.page');
//     Route::post('/register', [RegisterController::class, 'registerStore'])->name('register.store');
//     Route::get('/login', [RegisterController::class, 'loginPage'])->name('login.page');
//     Route::post('/login', [RegisterController::class, 'loginStore'])->name('login.store');

//     /*AJAX Call */
//     Route::get('/upzilla/ajax/{district_id}', [CheckoutController::class, 'loadUpazillaAjax'])->name('loadupazila.ajax');


//     Route::prefix('customer/')->middleware(['auth', 'is_customer'])->group(function(){
//         Route::get('dashboard',[CustomerController::class, 'dashboard'])->name('customer.dashboard');
//         Route::get('logout', [RegisterController::class, 'logout'])->name('customer.logout');
//         /*Coupon apply & remove */
//         Route::post('cart/apply-coupon', [CartController::class, 'couponApply'])->name('customer.couponapply');
//         Route::get('cart/remove-coupon/{coupon_name}', [CartController::class, 'removeCoupon'])->name('customer.couponremove');

//         /*Checkout Page */
//         Route::get('checkout', [CheckoutController::class, 'checkoutPage'])->name('customer.checkoutpage');
//         Route::post('placeorder', [CheckoutController::class, 'placeOrder'])->name('customer.placeorder');

//         Route::get('email', function(){
//             $order = Order::whereId(1)->with(['billing', 'orderdetails'])->get();
//             return view('frontend.mail.purchaseconfirm', [
//                 'order_details' => $order
//             ]);
//         });
//     });
// });
// ========================================================








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Modified part 
Route::get('/sleep', function () {
    return view('prediction.sleep');
})->name('sleep');


Route::post('/predict-sleep',[PredictionController::class, 'predictSleepDisorder'] )->name('predictSleepDisorder');
require __DIR__.'/auth.php';
