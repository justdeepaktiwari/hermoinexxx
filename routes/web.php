<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/home', function(){
        return view("admin.index");
    })->name('home');

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /**Use Role And Permission*/
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);

});