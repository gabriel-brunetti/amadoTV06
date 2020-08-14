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

Route::get('/admin/produtos', 'ProdutosController@index');
Route::post('/admin/produtos', 'ProdutosController@store' );
Route::get('/admin/produtos/create', 'ProdutosController@create');
Route::get('/admin/produtos/{id}', 'ProdutosController@show');

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