<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AlbumSongController;
use App\Http\Controllers\ContactManageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

  
 Route::get('/',[HomeController::class, 'home']);
 Route::get('/bible-music-free',[MusicController::class, 'christianMusic'])->name('christian.music.free');
 Route::get('/bible-music-free/{id}',[MusicController::class, 'albumgetByID'])->name('album.details');

 Route::get('/contact-us',[HomeController::class, 'contactus']);
 Route::get('/benefits',[HomeController::class, 'benefits']);
 Route::get('/testimonial',[HomeController::class, 'testimonial']);

 Route::get('/checkout',[CheckoutController::class, 'checkout']);
 Route::post('/checkout',[CheckoutController::class, 'checkout']);
 Route::get('/order-summery-checkout', [CheckoutController::class, 'getcheckotOrdersummery']);

Route::get('payment', [PaymentController::class, 'payment'])->name('payment');
Route::get('paypal/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

Route::get('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');
Route::get('/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');

Route::get('/thank-you/{paymetid}', [PaymentController::class, 'thankyou']);


 Route::get('/cart',[CartController::class, 'cartView']);
 Route::get('/add-cart',[CartController::class, 'addItem']);
 Route::get('/remove-cart/{id}',[CartController::class, 'removeItem']);
 Route::get("/order-summery", [CartController::class, 'getOrdersummery']);
 Route::get("/order-update-quantities", [CartController::class, 'order_update_quantities']);


 Route::get('/login',[HomeController::class, 'login']);
 Route::post('/login',[HomeController::class, 'login']);
 Route::get('/logout',[HomeController::class, 'logout']);
 Route::get('/registration',[HomeController::class, 'registration']);
 Route::post('/registration',[HomeController::class, 'registration']);

 Route::post('/send-msg', [ContactManageController::class, 'send_msg']);

Route::group(['prefix' => 'author'],function(){
    Route::get('/',[AdminController::class, 'login']);
    Route::post('/',[AdminController::class, 'login']);
    Route::get('/logout',[AdminController::class, 'logout']);
    Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('is_adminlogin');
     Route::get('/order',[DashboardController::class, 'order'])->middleware('is_adminlogin');

       Route::controller(CompanyController::class)->group(function(){
        Route::get('company/','list')->middleware('is_adminlogin')->name('company.list');
        Route::get('company/update/{id}', 'update')->middleware('is_adminlogin')->name('company.update');
        Route::post('company/update', 'update')->middleware('is_adminlogin')->name('company.update.success');
    });

     Route::controller(CategoryController::class)->group(function(){
        Route::get('category/','list')->middleware('is_adminlogin')->name('category.list');
        Route::get('category/add','add')->middleware('is_adminlogin')->name('category.add');
        Route::post('category/add','add')->middleware('is_adminlogin')->name('category.add.success');
        Route::get('category/update/{id}', 'update')->middleware('is_adminlogin')->name('category.update');
        Route::post('category/update', 'update')->middleware('is_adminlogin')->name('category.update.success');
        Route::get('category/delete/{id}','delete')->middleware('is_adminlogin')->name('category.delete');
    });


    Route::controller(AlbumController::class)->group(function(){
        Route::get('album','list')->middleware('is_adminlogin')->name('list');
        Route::get('album/add','add')->name('add');
        Route::post('album/add','add')->name('add.success');
        Route::get('album/update/{id}', 'update')->middleware('is_adminlogin')->name('update');
        Route::post('album/update', 'update')->middleware('is_adminlogin')->name('update.success');
        Route::get('album/delete/{id}','delete')->middleware('is_adminlogin')->name('delete');

        Route::put('album/updateFunction/{id}', 'updateFunction')->middleware('is_adminlogin')->name('updateFunction.success');

        
    });

    


});






/**
 *  organization dashboard
*/
