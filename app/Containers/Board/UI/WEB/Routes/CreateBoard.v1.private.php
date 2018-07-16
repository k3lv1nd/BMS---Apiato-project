<?php

/** @var Route $router */
$router->get('/boards/create', [
    'as' => 'get_board_form',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
$router->post('/boards/create/add', [
    'as' => 'create_board',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);
