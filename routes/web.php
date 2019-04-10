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

Route::get('/', function () {
    return view('home');
});

Route::get('/aa', 'HomeController@adcount');


Auth::routes();
Route::resource('orderproduct','OrderProductController');
Route::get('/sednorder/{id}/{id_product}', 'OrderProductController@sendorder');
Route::get('/send_user', 'OrderProductController@send_user');
Route::get('/deletesend_user/{id}/{id_product}', 'OrderProductController@deletesend_user');

Route::resource('product','ProductController');
Route::resource('listp','ListProductController');
Route::get('listp/{id}', 'ListProductController@show');
// Route::get('/showorder/{id}', 'ListProductController@confirmorder');
Route::get('/showorder/{id}', 'ListProductController@confirmorder');
Route::get('/orderbuy', 'ListProductController@orderbuy');
Route::get('/pay/{id}', 'ListProductController@pay');


Route::get('/listorder', 'ProductController@listordeshowr');

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', function () {
//     return view('home'); 
// });

Route::get('/buy', function () {
    return view('buy'); 
});

Route::get('/listproduct', function () {
    return view('listproduct'); 
});

// Route::get('/product', function () {
//     return view('product'); 
// });

Route::get('/datasell', function () {
    return view('datasell'); 
});

Route::get('/addadcount', function () {
    return view('sell.addadcount'); 
});


Route::get('/declare', function () {
    return view('declare'); 
});

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('images-upload', 'HomeController@imagesUpload');

Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');


Route::get('/testupimg', function () {
    return view('sell.imagesUpload'); 
});