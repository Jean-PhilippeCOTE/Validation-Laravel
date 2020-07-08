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

Route::get('/', 'NavController@home');
Route::get('add', 'NavController@add');

Route::get('animalsListing', 'NavController@animals');
Route::get('addAnimal', 'NavController@addAnimal');
Route::get('speciesListing', 'NavController@species');
Route::get('addSpecies', 'NavController@addSpecies');

Route::post('addAnAnimal', 'ActionController@addAnimal');
Route::post('animalsEdit', 'NavController@getAnimalInfos');
Route::post('editAnimal', 'ActionController@editAnimal');
Route::post('/deleteAnimal', 'ActionController@deleteAnimal');

Route::post('addOneSpecies', 'ActionController@addSpecies');
Route::post('speciesEdit', 'NavController@getSpeciesInfos');
Route::post('editSpecies', 'ActionController@editSpecies');
Route::post('/deletespecies', 'ActionController@deleteSpecies');
