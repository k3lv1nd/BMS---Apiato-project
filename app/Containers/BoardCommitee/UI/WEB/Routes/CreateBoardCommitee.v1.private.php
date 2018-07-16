<?php

/** @var Route $router */
$router->get('boardcommitee/create', [
    'as' => 'web_boardcommitee_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
