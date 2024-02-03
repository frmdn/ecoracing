<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\SalesforceController;
use App\Http\Controllers\SpvController;

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
    return view('ui.index');
});

Route::get('/data', 'App\Http\Controllers\PegawaiController@index');
Route::post('/import', 'App\Http\Controllers\DataController@datapsimport')->name('import');

Route::get('/agency', [AgencyController::class, 'index']);
Route::get('/spv', [SpvController::class, 'index']);
Route::get('/sf', [SalesforceController::class, 'index']);