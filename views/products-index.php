<?php

use App\models\products;

/**
 * @var $products products[]
 */
?>

<?php require_once APP_ROOT . '/views/layouts/head.php' ?>

<section class="mt-5">
    <h1>PRODUCTS:</h1>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">productName</th>
                <th scope="col">manufacturer</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
                <th scope="col">updatedDate</th>
                <th scope="col">createdDate</th>
                <th scope="col">quantity</th>
                <th scope="col">userName</th>
                <th scope="col">userSurname</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['productName'] ?></td>
                <td><?= $product['manufacturer'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['updatedDate'] ?></td>
                <td><?= $product['createdDate'] ?></td>
                <td><?= $product['quantity'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['surname'] ?></td>
            </tr>
        <?php endforeach ?>
        <tbody>
    </table>

</section>

<?php require_once APP_ROOT . '/views/layouts/end-head.php' ?>