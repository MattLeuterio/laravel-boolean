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

// Static pages 
Route::get('/', 'StaticPageController@index')->name('static-pages.home');
Route::get('/privacy', 'StaticPageController@privacy')->name('static-pages.privacy');
Route::get('/faq', 'StaticPageController@faq')->name('static-pages.faq');

// Students
Route::get('/students','StudentController@index')->name('students.index');
Route::get('/students/show/{id}','StudentController@show')->name('students.show');