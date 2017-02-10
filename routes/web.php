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

Route::get('/test', function() {
    return view('wagonmain');
});

Route::get('/index', function() {
    return view('wagon.index');
});

Route::get('/maintenance/personnel', function() {
    return view('wagon.maintenance.personnel');
});

Route::get('/maintenance/services', function() {
    return view('wagon.maintenance.services');
});

Route::get('/maintenance/vehicle', function() {
    return view('wagon.maintenance.vehicle');
});

Route::group(['middleware' => ['web']], function() {
    Route::resource('/maintenance/client', 'CompanyController');
});

/*Test*/
