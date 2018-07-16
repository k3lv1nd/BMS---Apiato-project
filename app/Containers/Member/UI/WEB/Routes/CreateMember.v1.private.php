<?php

/** @var Route $router */
$router->get('/addmembers', [
    'as' => 'get_addmember_form',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@index',
]);
$router->post('/addmembers/add', [
    'as' => 'create_member',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);


