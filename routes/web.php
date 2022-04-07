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
    return view('home');
    })->name('home');
Route::get('/newemployee', function () {
    return view('newemployee');
    })->name('newemployee');
Route::get('/stafflist', 'NewEmpController@allData')->name('stafflist');
Route::get('/stafflist/sort/{name?}/{type?}', 'NewEmpController@sortByName')->name('stafflist-sort-name');
Route::post('/newemployee/accepted', 'NewEmpController@accept')->name('newaccepted');
Route::get('/stafflist/{id}','NewEmpController@updateStafflist')->name('stafflist-update');
Route::post('/stafflist/{id}','NewEmpController@updateStafflistAccept')->name('stafflist-update-accept');
Route::get('/stafflist/{id}/delete','NewEmpController@deleteStafflist')->name('stafflist-delete');

