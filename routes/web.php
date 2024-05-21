<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['App\Http\Controllers\homeController', 'index']);
Route::get('/#services', ['App\Http\Controllers\homeController', 'inde']);


