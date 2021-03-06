<?php

use App\Http\Controllers\view_menu;
use App\Http\Controllers\TheDiary;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [view_menu::class, 'MainMenu']);
Route::get('/about', [view_menu::class, 'About']);
Route::resource('/TheDiary', TheDiary::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
