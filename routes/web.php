<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{slug}', 'DetailController@index')->name('detail');
Route::get('/checkout/{id}', 'CheckoutController@index')->name('checkout')->middleware(['auth', 'verived']);
Route::post('/checkout/{id}', 'CheckoutController@proccess')->name('checkout-proccess')->middleware(['auth', 'verived']);
Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')->name('checkout-create')->middleware(['auth', 'verived']);
Route::post('/checkout/remove/{detail_id}', 'CheckoutController@remove')->name('checkout-remove')->middleware(['auth', 'verived']);
Route::post('/checkout/comfirm/{id}', 'CheckoutController@success')->name('checkout-success')->middleware(['auth', 'verived']);

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);
    });

Auth::routes(['verify' => true]);
