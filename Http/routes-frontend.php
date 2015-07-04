<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'user/{auth_user}'], function (Router $router) {

    $router->get('/', ['as' => 'pxcms.user.view', 'uses' => 'PagesController@getProfile']);
});
