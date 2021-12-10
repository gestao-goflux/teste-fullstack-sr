<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'offers'], function () use ($router) {
        $router->get('/by-user/{user_id}', 'OffersController@getOffersByUser');
        $router->get('{id}', 'OffersController@show');
        $router->post('', 'OffersController@save');
        $router->put('{id, user_id}', 'OffersController@update');
    });

    $router->group(['prefix' => 'orders'], function () use ($router) {
        $router->get('', 'OrdersController@index');
        $router->post('', 'OrdersController@save');
        $router->post('{id}', 'OrdersController@show');
    });

    $router->group(['prefix' => 'users'], function () use ($router) {
        $router->get('', 'UsersController@index');
    });
});

$router->post('api/login', 'TokenController@token');

