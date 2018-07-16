<?php

/** @var Route $router */
$router->post('members/store', [
    'as' => 'web_member_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
