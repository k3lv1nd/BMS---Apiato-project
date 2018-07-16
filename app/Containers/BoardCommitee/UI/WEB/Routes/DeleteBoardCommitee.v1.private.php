<?php

/** @var Route $router */
$router->delete('boardcommitee/{id}', [
    'as' => 'web_boardcommitee_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
