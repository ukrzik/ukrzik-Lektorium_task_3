<?php

use Symfony\Component\Routing\RouteCollection;

/**
 * @var $routes RouteCollection
 */
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">MVC Framework</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= $routes->get('/')->getPath() ?>">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $routes->get('users')->getPath() ?>">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $routes->get('products')->getPath() ?>">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $routes->get('customers')->getPath() ?>">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EpiUgoWest</a>
            </li>
        </ul>
    </div>
</nav>