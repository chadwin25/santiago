<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'TaskPages::index');
$routes->get('/tasks', 'TaskPages::tasks');
$routes->get('/profile', 'TaskPages::profile');
$routes->get('/about', 'TaskPages::about');