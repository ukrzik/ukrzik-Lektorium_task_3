<?php

/**
 * @var $customer array
 */
?>

<?php require_once APP_ROOT . '/views/layouts/head.php' ?>

    <section class="mt-5">
        <div class="d-flex justify-content-between" >
            <h1>Customer orders:</h1>
            <?php require_once APP_ROOT . '/views/components/back-to-homepage-link-show.php' ?>
        </div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">LastName</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customer as $item): ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['lastName'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </section>

<?php require_once APP_ROOT . '/views/layouts/end-head.php' ?>
