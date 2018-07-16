<?php

/** @var Route $router */
$router->get('boardmembers/{id}', [
    'as' => 'web_boardmembers_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
