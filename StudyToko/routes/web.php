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

// bawaan Larave
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Utama@index');
Route::post('/pushData','Utama@store');

Route::get('/login','Login@index');
Route::post('/daftar','Login@register');
