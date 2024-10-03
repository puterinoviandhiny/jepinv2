<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('pariwisata', 'PariwisataCrudController');
    Route::get('pariwisata/{id}/arrange-photos', 'PariwisataCrudController@arrangePhotos');
    Route::post('pariwisata/arrange-photos-save', 'PariwisataCrudController@savePhotoOrder');

    Route::crud('commodities', 'CommoditiesCrudController');
    Route::get('commodities/arrange-images', 'App\Http\Controllers\Admin\CommoditiesCrudController@arrangeImages');
    Route::post('commodities/save-image-order', 'App\Http\Controllers\Admin\CommoditiesCrudController@saveImageOrder');
    Route::crud('commodity-prices', 'CommodityPricesCrudController');
    Route::crud('events', 'EventsCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
