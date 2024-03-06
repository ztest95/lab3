<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\News; 
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
