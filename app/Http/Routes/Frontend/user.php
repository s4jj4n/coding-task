<?php

$router->group(['namespace' => 'Frontend'], function ($router) {

    $router->resource('users', 'User\UserController');
});