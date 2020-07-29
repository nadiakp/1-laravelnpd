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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard-top-menu', function() {
    return view('dashboard-top-menu');
})->name('dashboard-top-menu');
Route::get('/side-menu-compact-full', function() {
    return view('side-menu-compact-full');
})->name('side-menu-compact-full');
Route::get('/dashboard-addl-menu', function() {
    return view('dashboard-addl-menu');
})->name('dashboard-addl-menu');
