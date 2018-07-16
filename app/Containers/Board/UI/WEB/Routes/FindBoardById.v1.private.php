<?php

/** @var Route $router */
$router->get('boards/{id}', [
    'as' => 'web_board_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
