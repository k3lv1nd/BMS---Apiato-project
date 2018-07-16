<?php

/** @var Route $router */
$router->get('boardmembers/create', [
    'as' => 'web_boardmembers_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
