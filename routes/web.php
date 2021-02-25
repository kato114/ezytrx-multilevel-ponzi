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
Route::post('/login', 'HomeController@check_login')->name("check_login");
Route::get('/register', 'HomeController@register')->name("register");
Route::post('/register', 'HomeController@check_register')->name("check_register");

Route::get('/dashboard', 'DashboardController@index')->name("dashboard");
Route::get('/ez1_detail', 'DashboardController@ez1_detail')->name("ez1_detail");
Route::get('/ez10_detail', 'DashboardController@ez10_detail')->name("ez10_detail");
Route::get('/team', 'DashboardController@teamStats')->name("team");
Route::get('/personal', 'DashboardController@personalStats')->name("personal");
Route::get('/leaderboard', 'DashboardController@leaderBoard')->name("leaderboard");
Route::get('/matrix', 'DashboardController@matrix')->name("matrix");
Route::get('/lost', 'DashboardController@lostEarning')->name("lost");
Route::get('/dividend', 'DashboardController@dividend')->name("dividend");
Route::get('/reftop', 'DashboardController@reftop')->name("reftop");

Route::get('/instruction', 'InformationController@instruction')->name("instruction");

Route::get('/upgrade', 'DashboardController@check_upgrade')->name("check_upgrade");
Route::get('/bonus', 'DashboardController@send_bonus')->name("send_bonus");