<?php

/** @var Route $router */
$router->get('members/{id}', [
    'as' => 'web_member_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
