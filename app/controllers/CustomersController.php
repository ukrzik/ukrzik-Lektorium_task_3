<?php

namespace App\controllers;

use App\models\customers;
use Symfony\Component\Routing\RouteCollection;

class CustomersController
{
    public function showIndex(RouteCollection $routes)
    {
        $customers = (new customers())->readAll();

        require_once APP_ROOT . '/views/customers-index.php';
    }

    public function showAction(int $id, RouteCollection $routes)
    {
        $customer = (new customers())->read($id);
        require_once APP_ROOT . '/views/customer.php';
    }
}