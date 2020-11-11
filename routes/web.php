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

Route::get('/', 'HomeController@index')->name("home");

Route::get('/login', 'HomeController@login')->name("login");
Route::get('/register', 'HomeController@register')->name("register");

Route::get('/dashboard', 'DashboardController@index')->name("dashboard");
Route::get('/team', 'DashboardController@teamStats')->name("team");
Route::get('/personal', 'DashboardController@personalStats')->name("personal");
Route::get('/leaderboard', 'DashboardController@leaderBoard')->name("leaderboard");
Route::get('/matrix', 'DashboardController@matrix')->name("matrix");
Route::get('/lost', 'DashboardController@lostEarning')->name("lost");

Route::get('/instruction', 'InformationController@instruction')->name("instruction");

