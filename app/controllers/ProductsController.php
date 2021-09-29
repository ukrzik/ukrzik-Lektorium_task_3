<?php

namespace App\controllers;

use App\models\products;
use Symfony\Component\Routing\RouteCollection;

class ProductsController
{
    public function showIndex(RouteCollection $routes)
    {
        $products = (new products())->readAll();

        require_once APP_ROOT . '/views/products-index.php';
    }
}
