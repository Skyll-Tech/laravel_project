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
    return view('welcome');
});
Route::get('/home','App\Http\Controllers\ClientController@home');
Route::get('/apropos','App\Http\Controllers\ClientController@apropos');
Route::get('/categorie','App\Http\Controllers\ClientController@categorie');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::get('/special','App\Http\Controllers\ClientController@special');
Route::get('/logi','App\Http\Controllers\ClientController@login');
Route::get('/register','App\Http\Controllers\ClientController@register');
Route::get('/page/{id}','App\Http\Controllers\ClientController@show');
 Route::get('/save','App\Http\Controllers\ClientController@save');
Route::post('/saveproduit','App\Http\Controllers\ClientController@creerproduit');
Route::get('/edit','App\Http\Controllers\ClientController@edit');
Route::post('/modifierproduit','App\Http\Controllers\ClientController@modifierproduit');