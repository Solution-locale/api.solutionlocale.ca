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

Route::prefix('v1/')->name('v1.')->middleware(['throttle:rate_limit,1'])->group(function () {
    
    Route::middleware(['auth:api', 'scope:read'])->group(function () {
        Route::get('/places', 'PlaceController@index')->name('places.index');
        Route::get('/places/{place}', 'PlaceController@show')->name('places.show');

        Route::get('/categories', 'CategoryController@index')->name('categories.index');
        Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
        
        Route::get('/regions', 'RegionController@index')->name('regions.index');
        Route::get('/regions/{region}', 'RegionController@show')->name('regions.show');

        Route::get('/place-types', 'PlaceTypeController@index')->name('place-types.index');
        Route::get('/place-types/{type}', 'PlaceTypeController@show')->name('place-types.show');

        Route::get('/delivery-types', 'DeliveryTypeController@index')->name('delivery-types.index');
        Route::get('/delivery-types/{type}', 'DeliveryTypeController@show')->name('delivery-types.show');

        Route::get('/rcms', 'RcmController@index')->name('rcms.index');
        Route::get('/rcms/{rcm}', 'RcmController@show')->name('rcms.show');
    });

    Route::middleware(['auth:api', 'scope:write'])->group(function () {
        //
    });
});
