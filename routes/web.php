<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\VideoController;

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


Auth::routes(["login" => false, "register" => false]);

Route::get('/', function () {
    return redirect()->route("home");
});

Route::group(['prefix' => 'alpha'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');
    Route::get("/redirect-on", [App\Http\Controllers\UrlManager::class, 'index']);
    Auth::routes(["login" => true, "register" => true]);
});

Route::group(['prefix' => 'alpha', 'middleware' => ['auth']], function () {

    Route::group(['middleware' => ['role:super-admin|Admin']], function () {
        Route::resource('dashboard', App\Http\Controllers\DashBoardController::class);
        Route::resource('videos', App\Http\Controllers\VideoController::class);
        Route::resource('photos', App\Http\Controllers\PhotoController::class);
        Route::resource('products', App\Http\Controllers\ProductController::class);

        /**Use Role And Permission*/
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('users', App\Http\Controllers\UserController::class);

        /**Landing Page Videos Manage*/
        Route::resource('landing-page', App\Http\Controllers\LandinPageManageController::class);

        Route::get('landing/testimonials', [App\Http\Controllers\LandinPageManageController::class, "testimonials"])
        ->name("landing-pages.testimonials");

        Route::get('landing/purchase-offer', [App\Http\Controllers\LandinPageManageController::class, "purchaseOffer"])
        ->name("landing-pages.purchaseOffer");

    });

    Route::get('user-videos/{video}', [VideoController::class, 'UserVideoDetail'])
    ->name("user-videos.video-detail");

    Route::get('user-videos', [VideoController::class, 'UserVideo'])
    ->name("user-videos");

    /**Stripe Payment Integration*/
    Route::get('stripe', [StripePaymentController::class, 'stripe']);
    Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
});

Route::post('upload-video-chunk', [VideoController::class, 'UploadVideo'])->name("upload-video");
Route::post('upload-photo-chunk', [VideoController::class, 'UploadThumbanil'])->name("upload-thumbnail");
Route::get('upload-file-chunk', [VideoController::class, 'ViewVideo']);