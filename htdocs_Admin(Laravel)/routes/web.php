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
    return view('Corn/home');
});

Route::get('/Citrouilleville', function()
{
    return view('Corn/Citro');
});

Route::get('/Corn', function()
{
    return view('Corn/home');
});

Route::post('/Firebase/direction','FireController@sendDirectionData');

Route::post('/Firebase/about','FireController@sendAboutData');

Route::post('/Firebase/ticket','FireController@sendTicketData');

Route::post('/Firebase/activity','FireController@sendActivityData');

Route::post('/Firebase/product','FireController@sendProductData');

Route::get('/Firebase/{title}','FireController@sendGPSData');

Route::post('/Firebase/hours','FireController@sendHoursData');
