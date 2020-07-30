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

Route::get('/messenger', function() {
    return view('messenger');
})->name('messenger');

Route::get('/messages', function() {
    return view('messages');
})->name('messages');

Route::get('/mail', function() {
    return view('mail');
})->name('mail');

Route::get('/tables', function() {
    return view('tables');
})->name('tables');

Route::get('/activity', function() {
    return view('activity');
})->name('activity');

Route::get('/profile-1', function() {
    return view('profile-1');
})->name('profile-1');

Route::get('/profile-2', function() {
    return view('profile-2');
})->name('profile-2');

Route::get('/tasks', function() {
    return view('tasks');
})->name('tasks');

// Route::get('/activity', function() {
//     return view('activity');
// })->name('activity');