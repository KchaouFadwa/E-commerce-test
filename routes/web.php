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

/*Route::get('/', function () {
    return view('shop.index');
});
*/
Route::get('/',[
    'uses'=>'ProductController@getIndex',
    'as '=> 'product.index'


])->name('product.index');


Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as '=> 'product.addToCart'


])->name('product.addToCart');



Route::get('/shooping-cart/',[
    'uses'=>'ProductController@getCart',
    'as '=> 'product.shoppingCart'


])->name('product.shoppingCart');


Route::get('/create/',[
    'uses'=>'ProductController@create',



])->name('create');

Route::get('/checkout/',[
    'uses'=>'ProductController@checkout',



])->name('checkout');


Route::get('/notinterrested/',[
    'uses'=>'ProductController@notinterrested',



])->name('notinterrested');

Route::get('/list/',[
    'uses'=>'ProductController@getlist',



])->name('list');


