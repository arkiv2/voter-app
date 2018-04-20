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
    return view('app');
});

Route::prefix('voters')->as('voters.')->group(function() {

    Route::view('table', 'voter.table')->name('table');
    Route::prefix('table')->as('table.')->group(function() {
        Route::get('init', 'Tables\VotersTableController@init')->name('init');
        Route::get('data', 'Tables\VotersTableController@data')->name('data');
        Route::get('exportExcel', 'Tables\VoterTableControll@exportExcel')->name('exportExcel');
    });
});

Route::resource('/dashboard', 'DashboardController');