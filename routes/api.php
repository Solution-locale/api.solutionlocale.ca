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

Route::prefix('v1/')->name('v1.')->group(function () {
    
    Route::middleware(['auth:api', 'scope:read'])->group(function () {
        Route::get('/regions', 'RegionController@index')->name('regions.index');
        Route::get('/regions/{region}', 'RegionController@show')->name('regions.show');
    });

    Route::middleware(['auth:api', 'scope:write'])->group(function () {
        //
    });
});
