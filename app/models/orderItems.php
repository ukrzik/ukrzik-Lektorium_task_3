<?php

namespace App\models;

use PDO;
use PDOStatement;

class OrderItems
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }

    protected $id;
    protected $orderId;
    protected $productId;
    protected $quantity;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


    // SET METHODS
    public function setOrderId(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function setProductId(string $productId)
    {
        $this->productId = $productId;
    }

    public function setQuantity(string $quantity)
    {
        $this->quantity = $quantity;
    }



    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}