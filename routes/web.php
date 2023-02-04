<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;

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


Auth::routes(["login" => false, "register"=>false]);

Route::get('/', function () {
    return redirect()->route("welcome");
});

Route::group(['prefix' => 'alpha'], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name("welcome");
    
    Auth::routes(["login" => true]);
});

Route::group(['prefix' => 'alpha', 'middleware' => ['auth']], function() {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('dashboard', App\Http\Controllers\DashBoardController::class);
    Route::resource('videos', App\Http\Controllers\VideoController::class);
    Route::resource('photos', App\Http\Controllers\PhotoController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);

    /**Use Role And Permission*/
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
   
    /**Stripe Payment Integration*/
    Route::get('stripe', [StripePaymentController::class, 'stripe']);
    Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
});