<?php

use App\models\users;
use Symfony\Component\Routing\RouteCollection;

/**
 * @var $customers users[]
 * @var $routes RouteCollection
 */
?>

<?php require_once APP_ROOT . '/views/layouts/head.php' ?>

<section class="mt-5">
    <h1>USERS:</h1>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->getName() ?></td>
                    <td><?= $user->getSurname() ?></td>
                    <td><?= $user->getEmail() ?></td>
                    <td><?= $user->getRole() ?></td>
                    <td>
                        <a href="<?= str_replace('{id}', $user->getId(), $routes->get('users')->getPath()) ?>">
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        <tbody>
    </table>

</section>

<?php require_once APP_ROOT . '/views/layouts/end-head.php' ?>