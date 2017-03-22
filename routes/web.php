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
    return view('welcome');
});

Route::get('metabolites', function () {
    return view('pages.metabolites');
});

Route::get('enzymes', 'MetabolitesController@index');

Route::resource('genes', 'GeneController');