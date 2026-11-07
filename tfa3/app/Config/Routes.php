<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::landing');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::index');
$routes->get('/customers/new', 'Customers::newCustomer');
$routes->post('/customers/create', 'Customers::create');
$routes->get('/users', 'Users::index');
$routes->get('/users/new', 'Users::newUser');
$routes->post('/users/create', 'Users::create');