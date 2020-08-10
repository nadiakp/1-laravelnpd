<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dashboard', function() {
    return response()->json([
        [ 
            "name" => "week 1",
            "data" => [130, 130, 180, 175, 200, 170, 250]
        ],
        [ 
            "name" => "week 2",
            "data" => [150, 140, 200, 175, 120, 270, 210]
        ]
    ]);
})->name('chart');