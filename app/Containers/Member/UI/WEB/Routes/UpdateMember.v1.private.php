<?php

/** @var Route $router */
$router->patch('members/{id}', [
    'as' => 'web_member_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
