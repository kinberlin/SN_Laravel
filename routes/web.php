<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
Route::get('/motivation_liste', 'MotivationController@show')->name('motivation.show');
Route::post('/motivation_create', 'MotivationController@save')->name('motivation.save');
Route::post('/motivation_update', 'MotivationController@update')->name('motivation.update');
Route::get('/motivation_edit/{id}', 'MotivationController@edit')->name('motivation.edit');
Route::get('/motivation_delete/{id}', 'MotivationController@delete')->name('motivation.delete');
});