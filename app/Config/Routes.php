<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Portfolio::index');
$routes->get('/projects', 'Portfolio::projects');
$routes->get('/skills', 'Portfolio::skills');
