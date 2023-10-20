<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::namespace(value:'site')->group(function(){
    Route::get(uri:'/', action:'HomeController')->name(name:'site.home');

    Router::get(uri:'produts', action:'CategoryController@index')->name(name:'site.produts');
    Router::get(uri:'produts/(slug)', action:'CategoryController@show')->name(name:'site.produts.category');

    Router::get(uri:'produts/(blog)', action:'BlogController@index')->name(name:'site.blog');

    Route::view(uri:'sobre',view:'site.about.index')->name(name:'site.sobre');

    Route::get(uri:'Contato', action:'ContactController@index')->name(name:'site.contact');
    Route::post(uri:'Contato', action:'ContactController@index')->name(name:'site.contact.form');
});
