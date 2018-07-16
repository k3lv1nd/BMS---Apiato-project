<?php

/** @var Route $router */
$router->post('boards/store', [
    'as' => 'web_board_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
