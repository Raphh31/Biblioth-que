<?php

use App\Models\Abonne;
use App\Models\Livre;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/login', 'Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get('/home', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);

$routes->get('/gestiondeslivres', 'GestionLivres::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/creelivre', 'GestionLivres::creeLiv', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/supprimelivre', 'GestionLivres::SuppLivre', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/modifylivre', 'GestionLivres::ModifyLivre', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/modifylivre', 'GestionLivres::ModifyLivre',['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/addlivre', 'GestionLivres::AJouteLivre',['filter' => \App\Filters\AuthenticatedFilter::class]);




$routes->get('/gestiondesabonne', 'GestionAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/creeAbonne', 'GestionAbonne::creeAbo', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/supprimeAbo', 'GestionAbonne::SupprimeAbonne', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/modifyAbo', 'GestionAbonne::ModifyAbonne', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/modifyAbo', 'GestionAbonne::ModifyAbonne',['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->post('/addAbo', 'GestionAbonne::AJouteAbonne',['filter' => \App\Filters\AuthenticatedFilter::class]);

$routes->get('/espaceAbonne', 'EspaceAbonne::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
