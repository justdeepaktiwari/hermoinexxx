<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductColorController;
use App\Http\Controllers\ProductSizeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\VideoController;
use App\Models\Product;

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

Route::get('/', function () {
    return redirect()->route("home");
});

Route::get("/redirect-on", [App\Http\Controllers\UrlManager::class, 'index']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
 
Route::get('product', [App\Http\Controllers\Frontend\ProductController::class, "index"])
    ->name("list.product");

Route::get('products', [App\Http\Controllers\Frontend\ProductController::class, "list"])
    ->name("lists.product");

Route::get('product/{id}', [App\Http\Controllers\Frontend\ProductController::class, "show"])
    ->name("list.product.detail"); 


Route::get('user-videos/{video}', [VideoController::class, 'UserVideoDetail'])
    ->name("user-videos.video-detail");

Route::get('user-video', [VideoController::class, 'VideoSearch'])
    ->name("user-videos.search");

Route::get('user-videos', [VideoController::class, 'UserVideo'])
    ->name("user-videos");

Route::get('user-photos', [App\Http\Controllers\PhotoController::class, 'UserPhoto'])
    ->name("user-photos");

Route::get("meeting-recorded", function(){
    Product::where("id", 1)->update(["product_name" => "success"]);
})->name("meeting-recorded");

Route::get('models', [App\Http\Controllers\WebsiteModelsController::class, 'index'])
    ->name("models");
/**Search Query*/
Route::get('search-query', [VideoController::class, 'searchQuery'])->name("search.query");

/**Search Query*/
Route::get('load-more', [VideoController::class, 'loadMoreVideo'])->name("load.more");

/**Video Categories */
Route::get('videos-categories/{video_for}', [VideoController::class, 'CategoriesVideo'])->name("categories.video");
/************cart**********************************/

Route::post('add-cart', [App\Http\Controllers\Frontend\CartController::class, "store"])->name("add-to-cart");
Route::post('remove-cart', [App\Http\Controllers\Frontend\CartController::class, "remove"])->name("remove-to-cart");

Route::group(['middleware' => ['auth']], function () {
    Route::post('add-address', [App\Http\Controllers\Frontend\AddressController::class, "store"])->name("add-address");
    Route::get('cart', [App\Http\Controllers\Frontend\CartController::class, "index"])->name("product.cart");
    Route::get('dashboard', [App\Http\Controllers\Frontend\DashboardController::class, "index"])->name("user-dashboard");
    Route::get("connect-meet", function(){
        return view("video-cam.index");
    });
});

Auth::routes(["login" => true, "register" => true]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::group(['middleware' => ['role:super-admin|Admin|models']], function () {
        Route::resource('dashboard', App\Http\Controllers\DashBoardController::class);
        Route::resource('videos', App\Http\Controllers\VideoController::class);
        Route::resource('photos', App\Http\Controllers\PhotoController::class);
        Route::resource('products', App\Http\Controllers\ProductController::class);
        Route::resource('purchase', App\Http\Controllers\PurchaseOfferController::class);

        Route::resource('product-color', ProductColorController::class);
        Route::resource('product-size', ProductSizeController::class);

        /**Use Role And Permission*/
        Route::resource('roles', App\Http\Controllers\RoleController::class);
        Route::resource('users', App\Http\Controllers\UserController::class);
        Route::resource('models', App\Http\Controllers\PartnerController::class);
        Route::resource('orders', App\Http\Controllers\PaymentPurchaseController::class);
        Route::resource('ads', App\Http\Controllers\AdsSectionController::class);
        Route::resource('product-categories', App\Http\Controllers\ProductCategoryController::class);

        
        Route::get('payments', [App\Http\Controllers\PaymentController::class, "index"])
            ->name("payments");

        /**Use Category And Tag*/
        Route::get('category-tag', [App\Http\Controllers\CategoryAndTagController::class, "index"])
            ->name("category-tag.index");

        Route::get('category-tag/categories/{id}/edit', [App\Http\Controllers\CategoryAndTagController::class, "categoryEdit"])
            ->name("categories.edit");
        Route::get('category-tag/categories/create', [App\Http\Controllers\CategoryAndTagController::class, "categoryCreate"])
            ->name("categories.create");
        Route::post('category-tag/categories/store', [App\Http\Controllers\CategoryAndTagController::class, "categoryStore"])
            ->name("categories.store");
        Route::post('category-tag/categories/{id}', [App\Http\Controllers\CategoryAndTagController::class, "categoryUpdate"])
            ->name("categories.update");
        Route::delete('category-tag/categories/{id}', [App\Http\Controllers\CategoryAndTagController::class, "categoryDestroy"])
            ->name("categories.destroy");

        Route::get('category-tag/tags/{id}/edit', [App\Http\Controllers\CategoryAndTagController::class, "tagEdit"])
            ->name("tags.edit");
        Route::get('category-tag/tags/create', [App\Http\Controllers\CategoryAndTagController::class, "tagCreate"])
            ->name("tags.create");
        Route::post('category-tag/tags/store', [App\Http\Controllers\CategoryAndTagController::class, "tagStore"])
            ->name("tags.store");
        Route::post('category-tag/tags/{id}/update', [App\Http\Controllers\CategoryAndTagController::class, "tagStore"])
            ->name("tags.update");
        Route::delete('category-tag/tags/{id}', [App\Http\Controllers\CategoryAndTagController::class, "tagDestroy"])
            ->name("tags.destroy");

        /**Landing Page Videos Manage*/
        Route::resource('landing-page', App\Http\Controllers\LandinPageManageController::class);

        Route::get('landing/testimonials', [App\Http\Controllers\LandinPageManageController::class, "testimonials"])
            ->name("landing-pages.testimonials");

        Route::get('landing/purchase-offer', [App\Http\Controllers\LandinPageManageController::class, "purchaseOffer"])
            ->name("landing-pages.purchaseOffer");
    });
});

Route::post('register-user', [StripePaymentController::class, 'processStep'])->name("payment.process");

Route::post('upload-video-chunk', [VideoController::class, 'UploadVideo'])->name("upload-video");
Route::post('upload-photo-chunk', [VideoController::class, 'UploadThumbanil'])->name("upload-thumbnail");
Route::get('upload-file-chunk', [VideoController::class, 'ViewVideo']);
Route::get('debug-project', [HomeController::class, 'debugAmount']);

/**Stripe Payment Integration*/
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('product-checkout-form', [StripePaymentController::class, 'product_checkout_form'])->name('product-checkout-form');
Route::post('product-checkout-submit', [StripePaymentController::class, 'product_checkout'])->name('product-checkout');
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
