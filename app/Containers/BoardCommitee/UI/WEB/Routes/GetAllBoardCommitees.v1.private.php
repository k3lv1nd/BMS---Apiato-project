<?php

/** @var Route $router */
$router->get('boardcommitee', [
    'as' => 'web_boardcommitee_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
