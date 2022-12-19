<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\DriverController;
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

//main routes are view-records and table


Route::get('/', function () {
    return redirect('view-records');
});



Route::get('view-records','App\Http\Controllers\StudViewController@index')->name('view.records');


//localhost:8000/view-records
Route::get('insert','App\Http\Controllers\UserInsertController@insertform');

Route::post('create','App\Http\Controllers\UserInsertController@insert');

Route::post('multiple1','App\Http\Controllers\UserInsertController@mut');

Route::post('delete1','App\Http\Controllers\UserInsertController@delete');
Route::get('trial','App\Http\Controllers\DriverController@driverfun');


//localhost:8000/train 
//start here
Route::post('train','App\Http\Controllers\TrainingController@indexe');


//localhost:8000/traintableview.

Route::get('trained','App\Http\Controllers\TrainingViewController@index');


Route::post('multiple2','App\Http\Controllers\UserInsertController@mut2');

Route::post('delete2','App\Http\Controllers\UserInsertController@delete2');

//Route::post('','App\Http\Controllers\UserInsertController@delete2');

Route::get('click_edit/{id}','App\Http\Controllers\TrainingViewController@editfunc');

Route::post('update_trainings/{id}','App\Http\Controllers\TrainingViewController@update_trainings');

Route::get('laratrials','App\Http\Controllers\DriverController@larat')->name('larat.names');

Route::get('laratrials/list','App\Http\Controllers\DriverController@getDrivers')->name('drivers.list');


Route::get('pdfUpload','App\Http\Controllers\PdfUploadController@viewPdf');

Route::post('uploadfile','App\Http\Controllers\PdfUploadController@getPdf');

// Route::get('download/{file}','App\Http\Controllers\PdfUploadController@downloadpdf');


//Route::get('download/{filex}', function(){return($filex);});

Route::view('navba','layouts.navigationbar');


Route::get('laraweb','App\Http\Controllers\DriverController@getLarat');