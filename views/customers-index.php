<?php

use App\models\customers;
use Symfony\Component\Routing\RouteCollection;

/**
 * @var $customers customers[]
 * @var $routes RouteCollection
 */
?>

<?php require_once APP_ROOT . '/views/layouts/head.php' ?>

<section class="mt-5">
    <h1>CUSTOMERS:</h1>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">SHOW</th>
                </tr>
            </thead>
             <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer->getEmail() ?></td>
                    <td><?= $customer->getFirstName() ?></td>
                    <td><?= $customer->getLastName() ?></td>
                    <td>
                        <a href="<?= str_replace('{id}', $customer->getId(), $routes->get('customer')->getPath()) ?>">
                            definition
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
            <tbody>
        </table>

</section>

<?php require_once APP_ROOT . '/views/layouts/end-head.php' ?>

