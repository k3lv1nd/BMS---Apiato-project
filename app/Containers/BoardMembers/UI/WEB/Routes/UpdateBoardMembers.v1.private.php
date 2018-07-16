<?php

/** @var Route $router */
$router->patch('boardmembers/{id}', [
    'as' => 'web_boardmembers_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
