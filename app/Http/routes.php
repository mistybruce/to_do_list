<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/','PagesController@home');

// Route::get('/about','PagesController@about');

Route::get('lists', 'ListController@index');

Route::get('lists/{list}', 'ListController@show');

Route::post('lists/{list}/item','ItemController@store');

Route::get('/items/{item}/edit', 'NotesController@edit');

Route::put('items/{item}', 'NotesController@update');


// Route::get('cards', 'CardsController@index');

// Route::get('cards/{card}', 'CardsController@show');

// Route::post('cards/{card}/notes','NotesController@store');

// Route::get('/notes/{note}/edit', 'NotesController@edit');

// Route::put('notes/{note}', 'NotesController@update');
