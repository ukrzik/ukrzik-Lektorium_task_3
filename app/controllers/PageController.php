<?php

namespace App\controllers;

use App\models\users;
use App\models\products;
use App\models\customers;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    public function indexAction(RouteCollection $routes)
    {
        $routeToUsers = $routes->get('users')->getPath();
        $routeToProducts = $routes->get('products')->getPath();
        $routeToCustomers = $routes->get('customers')->getPath();
        require_once APP_ROOT . '/views/home.php';
    }
}