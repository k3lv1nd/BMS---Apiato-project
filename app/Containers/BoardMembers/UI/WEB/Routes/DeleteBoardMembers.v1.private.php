<?php

/** @var Route $router */
$router->delete('boardmembers/{id}', [
    'as' => 'web_boardmembers_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
