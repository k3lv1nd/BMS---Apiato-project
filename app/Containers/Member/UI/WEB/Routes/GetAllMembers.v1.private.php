<?php

/** @var Route $router */
$router->get('members', [
    'as' => 'web_member_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
