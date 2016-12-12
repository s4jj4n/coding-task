<?php

$router->group(['namespace' => 'Frontend'], function ($router) {

    $router->get('/', 'User\UserController@index');
    $router->resource('users', 'User\UserController', ['except' => ['edit', 'update', 'delete']]);
});