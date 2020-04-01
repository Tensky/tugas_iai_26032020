<?php

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

$router->get('selectAll', 'UserController@selectAll');
$router->get('no1', 'UserController@edit');
$router->get('no2', 'UserController@gantiPassword');
$router->get('no3', 'TaskController@generateGanjil');
$router->get('no5', 'GitController@store');
