<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function () {
    $products = App\Tags::all();
    return view('ajax.index')->with('products',$products);
})->name('ajax.index');

Route::get('products/{product_id?}',function($product_id){
    $product = App\Tags::find($product_id);
    return response()->json($product);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
