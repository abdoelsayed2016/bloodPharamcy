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
Route::prefix( 'categories' )->group( function () {

	Route::get( '/', 'CategoriesControlller@index' )->name( 'categories.index' );

	Route::get( '/create', 'CategoriesControlller@create' )->name( 'categories.create' );

	Route::post( '/store', 'CategoriesControlller@store' )->name( 'categories.store' );

	Route::get( '/{category}/show', 'CategoriesControlller@show' )->name( 'categories.show' );

	Route::get( '/{category}/edit', 'CategoriesControlller@edit' )->name( 'categories.edit' );

	Route::patch( '/{category}/update', 'CategoriesControlller@update' )->name( 'categories.update' );

	Route::delete( '/{category}/destroy', 'CategoriesControlller@destroy' )->name( 'categories.destroy' );
} );
Route::get('/asd', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('welcome');
});
