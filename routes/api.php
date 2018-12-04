<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', 'TriadLtd\ArrayImages\Http\Controllers\ArrayImagesController@index');
Route::post('/upload', 'TriadLtd\ArrayImages\Http\Controllers\ArrayImagesController@upload');
Route::delete('/delete/{image}', 'TriadLtd\ArrayImages\Http\Controllers\ArrayImagesController@delete');
