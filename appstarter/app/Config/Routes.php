<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/login', 'Connection::attemptLogin', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/home', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/gestiondeslivres', 'GestionLivres::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/gestiondesabonne', 'GestionAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/supprimeAbo', 'GestionAbonne::SupprimeAbonne', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/modifyAbo', 'GestionAbonne::ModifyAbonne', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/modifyAbo', 'GestionAbonne::ModifyAbonne',['filter' => \App\Filters\AuthenticatedFilter::class]);

