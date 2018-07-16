<?php

/** @var Route $router */
$router->delete('boards/{id}', [
    'as' => 'web_board_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
