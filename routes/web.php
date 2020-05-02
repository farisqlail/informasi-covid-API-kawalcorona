<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CovidController@indo');
Route::get('/ChartProvinsi', 'CovidController@daerah');

// Route::get('/', function () {
//     return view('welcome');
// });

