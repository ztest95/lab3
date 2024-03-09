<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\News; 
use App\Controllers\Pages;
use App\Controllers\Guests;
use App\Controllers\Old;


/**
 * @var RouteCollection $routes
 */

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('guests', [Guests::class, 'index']);
$routes->get('guests/new', [Guests::class, 'new']); 
$routes->post('guests', [Guests::class, 'create']); 
$routes->get('guests/(:segment)', [Guests::class, 'show']); 

$routes->get('old', [Old::class, 'index']);

$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
