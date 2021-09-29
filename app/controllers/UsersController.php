<?php

namespace App\controllers;

use App\models\users;
use Symfony\Component\Routing\RouteCollection;

class UsersController
{
    public function showIndex(RouteCollection $routes)
    {
        $users = (new users())->readAll();

        require_once APP_ROOT . '/views/users-index.php';
    }
}