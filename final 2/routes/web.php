<?php

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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index'
]);


Route::get('/cart', [
    'uses' => 'CartController@index',
    'as' => 'cart.index'
]);

Route::post('/cart', [
    'uses' => 'CartController@store',
    'as' => 'cart.store'
]);


Route::get('/delete/{id}', [
    'uses' => 'CartController@delete',
    'as' => 'cart-delete'
]);

Route::get('/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'checkout.index'
]);

Route::post('/checkout', [
    'uses' => 'CheckoutController@store',
    'as' => 'checkout.store'
]);




