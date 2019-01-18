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

Route::get('/', ['uses' => 'Patterns\PatternsController@index', 'as' => 'patterns.index']);
Route::get('/decorator', ['uses' => 'Patterns\PatternsController@decorator', 'as' => 'patterns.decorator']);
Route::post('/decorator', ['uses' => 'Patterns\PatternsController@decorator', 'as' => 'patterns.decorator.submit']);

Route::get('/chain', ['uses' => 'Patterns\PatternsController@chain', 'as' => 'patterns.chain']);
Route::post('/chain', ['uses' => 'Patterns\PatternsController@chain', 'as' => 'patterns.chain.submit']);

Route::get('/builder', ['uses' => 'Patterns\PatternsController@builder', 'as' => 'patterns.builder']);
Route::post('/builder', ['uses' => 'Patterns\PatternsController@builder', 'as' => 'patterns.builder.submit']);
