<?php

/** @var Route $router */
$router->get('boardcommitee/{id}/edit', [
    'as' => 'web_boardcommitee_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
