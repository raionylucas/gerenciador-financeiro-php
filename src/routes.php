<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', "ItemsController@createAction");
$router->post('/novo', 'ItemsController@createAction');

$router->get('/item/{id}/editar', 'ItemsController@update');
$router->post('/item/{id}/editar', 'ItemsController@updateAction');

$router->get('/item/{id}/excluir', 'ItemsController@del');
