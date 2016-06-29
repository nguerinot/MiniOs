<?php

$routes = [
    'index'       => [
        'url'        => '/index',
        'controller' => 'HomeController',
        'action'     => 'indexAction',
    ],
    'contact'     => [
        'url'        => '/contact',
        'controller' => 'ContactController',
        'action'     => 'contactAction'
    ],
    'wiki'        => [
        'url'        => '/wiki',
        'controller' => 'HomeController',
        'action'     => 'wikiAction',
    ],
    'test'        => [
        'url'        => '/test',
        'controller' => 'HomeController',
        'action'     => 'testAction',
    ],
    'articles'         => [
        'url'        => '/articles',
        'controller' => 'HomeController',
        'action'     => 'articlesAction',
    ],
    'delete'      => [
        'url'        => '/delete',
        'controller' => 'HomeController',
        'action'     => 'deleteAction',
    ],
    '404'         => [
        'url'        => '/404',
        'controller' => 'SecurityController',
        'action'     => '404Action',
    ],
];