<?php

/** @var Route $router */
$router->delete('members/{id}', [
    'as' => 'web_member_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
