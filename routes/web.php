<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;


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



Route::post('submit','App\Http\Controllers\pageController@save');
Route::get('list',[pageController::class,'show']);
Route::get('statusupdate/{id}','App\Http\Controllers\pageController@updateStatus');







