<?php

/** @var Route $router */
$router->patch('boardcommitee/{id}', [
    'as' => 'web_boardcommitee_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
