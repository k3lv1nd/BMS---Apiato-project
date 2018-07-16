<?php

/** @var Route $router */
$router->get('boards/{id}/edit', [
    'as' => 'web_board_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
