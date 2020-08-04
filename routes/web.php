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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/elevages/{id}','Productcontroller@showelevage')->name('elevages');

Route::livewire('agriculture','add-product')->layout('layouts._master');

Route::livewire('mon-panier','list-product')->layout('layouts._master');

Route::livewire('payement','register')->layout('layouts._master')->name('login');

Route::post('/factureOMS','Productcontroller@pdf')->name('pdf.order');

Route::get('/detail{id}','productController@show')->name('product.show');
Route::livewire('produit','details')->layout('layouts._master');

Route::livewire('login','client.login')->layout('layouts._master');

Route::livewire('order','client.home')->middleware('auth')->layout('home');


Route::post('/connexion','Productcontroller@Connect');

Route::post('/addProduct/{id}', 'Productcontroller@addProduct')->name('product.add');

// Route::livewire('/addProduct/{id}','add-product')->name('add-product');

Route::livewire('connect','connect');

Route::get('/product/{id}','Productcontroller@OneArticle')->name('product.detail');

Route::livewire('contact-us','contacts')->layout('layouts._master');


Route::get('/test','Controller@index');

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
