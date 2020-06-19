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
Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@login');
//Route::get('/listProducts', 'CartController@shop')->name('listProducts');
Route::get('/listProducts', 'ProductController@index');
/*Route::get('/listProducts', function(){
    $products = DB::table('products')->get();
    return view('/listProducts', ['product'=>$products]);
});*/
Route::get('/product_insert', 'ProductController@index')->name('product_insert');
Route::post('users/{id}', function ($id) {
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/buy', 'ProductsController@index');
 
Route::get('cart', 'ProductsController@cart');
 
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::patch('update-cart', 'ProductsController@update');
 
Route::delete('remove-from-cart', 'ProductsController@remove');