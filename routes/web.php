<?php

use App\Constant;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::group(['prefix' => '/api'], function () {
    Route::group(['prefix' => '/client'], function () {
        Route::group(['prefix' => '/album'], function () {
            Route::get(
                "/get-all",
                Constant::CONTROLLER_ALBUM . 'getListAlbumAvai'
            );
        });

        Route::group(['prefix' => '/photo'], function () {
            Route::get(
                '/by-album-id/{albumId}',
                Constant::CONTROLLER_PHOTO . 'getAllPhotoByAvaiByAlbum'
            );
        });
    });
});
