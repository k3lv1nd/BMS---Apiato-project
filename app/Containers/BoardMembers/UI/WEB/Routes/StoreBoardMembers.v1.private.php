<?php

/** @var Route $router */
$router->post('boardmembers/store', [
    'as' => 'web_boardmembers_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
