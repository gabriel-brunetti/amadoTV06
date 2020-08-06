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

Route::get('/teste', 'ProdutosController@index');
Route::get('/teste/{id}', 'ProdutosController@show');

Route::get('/', function () {
    return view('index');
});

Route::get('/carrinho', function () {
    return view('cart');
});

Route::get('/pagamento', function () {
    return view('checkout');
});

Route::get('/produtos', function () {
    return view('product-details');
});

Route::get('/shop', function () {
    return view('shop');
});