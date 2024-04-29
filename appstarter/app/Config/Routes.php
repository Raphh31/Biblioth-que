<?php

use CodeIgniter\Router\RouteCollection;

/**@var RouteCollection $routes*/

$routes->get('/', 'Hos  me::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/home', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/gestiondeslivres', 'GestionLivres::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
<<<<<<< HEAD
$routes->get('/gestiondesabonne', 'GestionAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/supprimeAbo', 'GestionAbonne::SupprimeAbonne', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/modifyAbo', 'GestionAbonne::ModifyAbonne', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/modifyAbo', 'GestionAbonne::ModifyAbonne',['filter' => \App\Filters\AuthenticatedFilter::class]);

$routes->get('/espaceAbonne', 'EspaceAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
=======
$routes->get('/gestiondesabonne', 'GestionAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
>>>>>>> 607b96bea234fb714243c9dba7826491a3f1a65f
