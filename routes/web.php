<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('users', new Route(constant('URL_SUBFOLDER') . '/users', ['controllers' => 'UsersController', 'method'=>'showIndex'], []));
$routes->add('products', new Route(constant('URL_SUBFOLDER') . '/products', ['controllers' => 'ProductsController', 'method'=>'showIndex'], []));
$routes->add('customer', new Route(constant('URL_SUBFOLDER') . '/customer/{id}', ['controllers' => 'CustomersController', 'method'=>'showAction'], ['id' => '[0-9]+']));
$routes->add('customers', new Route(constant('URL_SUBFOLDER') . '/customers', ['controllers' => 'CustomersController', 'method'=>'showIndex'], []));
$routes->add('/', new Route(constant('URL_SUBFOLDER') . '/', ['controllers' => 'PageController', 'method'=>'indexAction'], []));