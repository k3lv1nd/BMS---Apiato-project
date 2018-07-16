<?php

/** @var Route $router */
$router->get('boardcommitee/{id}', [
    'as' => 'web_boardcommitee_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
