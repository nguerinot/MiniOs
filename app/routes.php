<?php

$routes = [
    'index'       => [
        'url'        => '/index',
        'controller' => 'HomeController',
        'action'     => 'indexAction',
    ],
    ' user.enregistrerCompte'     =>[
        'url'        => '/user/creation',
        'controller' => 'UserController',
        'action'     => 'enregistrerCompteAction',
    ],
    'user.creation'     =>[
        'url'        => '/user/creation',
        'controller' => 'UserController',
        'action'     => 'creationUserAction',
    ],
    'produitType.creation'       => [
        'url'        => '/produitType/creation',
        'controller' => 'ProduitTypeController',
        'action'     => 'creationAction',
    ],
    'produitType.create'       => [
        'url'        => '/produitType/create',
        'controller' => 'ProduitTypeController',
        'action'     => 'createAction',
    ],
    'produit.modif'       => [
        'url'        => '/produit/modif',
        'controller' => 'ProduitController',
        'action'     => 'modifAction',
    ],
    'produit.update'       => [
        'url'        => '/produit/update',
        'controller' => 'ProduitController',
        'action'     => 'updateAction',
    ],
    'produit.create'       => [
        'url'        => '/produit/create',
        'controller' => 'ProduitController',
        'action'     => 'produitAction',
    ],
    'produit.list'       => [
        'url'        => '/produit/listProduit',
        'controller' => 'ProduitController',
        'action'     => 'listProduitAction',
    ],
    'produit.delete'       => [
        'url'        => '/produit/delete',
        'controller' => 'ProduitController',
        'action'     => 'deleteAction',
    ],
    'contact'     => [
        'url'        => '/contact',
        'controller' => 'ContactController',
        'action'     => 'contactAction'
    ],
    'list'     => [
        'url'        => '/contact/list',
        'controller' => 'ContactController',
        'action'     => 'listAction'
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