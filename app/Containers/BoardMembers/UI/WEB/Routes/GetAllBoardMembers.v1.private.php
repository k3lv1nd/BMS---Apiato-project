<?php

/** @var Route $router */
$router->get('boardmembers', [
    'as' => 'web_boardmembers_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
