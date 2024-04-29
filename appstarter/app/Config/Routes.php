<?php

use CodeIgniter\Router\RouteCollection;

/**@var RouteCollection $routes*/

$routes->get('/', 'Hos  me::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/home', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/gestiondeslivres', 'GestionLivres::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/gestiondesabonne', 'GestionAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);