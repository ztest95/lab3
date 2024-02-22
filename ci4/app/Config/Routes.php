<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News; 
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */

$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
