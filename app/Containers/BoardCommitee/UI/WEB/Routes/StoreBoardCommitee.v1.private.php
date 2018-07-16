<?php

/** @var Route $router */
$router->post('boardcommitee/store', [
    'as' => 'web_boardcommitee_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
