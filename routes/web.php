<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produitController;


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

// Route::get('/', function () { return view('welcome');});
//Route::get('helps.blade.php', function () { return view('helps');});
Route::get('/', 'produitController@index')->name('produit.index');
Route::get('show/{id}', 'produitController@show')->name('produit.show');


Route::get('/pdf', 'DynamicPDFController@gen');
Route::get('/produit', 'produitController@create');
//Route::get('/produit', 'produitController@index');

Route::resource('/users', 'usersController@store');

//Route::resource('/fiche_technique', 'fiche_techniqueController');

