<?php

/** @var Route $router */
$router->get('boardmembers/{id}/edit', [
    'as' => 'web_boardmembers_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
