<?php

namespace App\models;

use PDO;
use PDOStatement;

class products
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }
    protected $id;
    protected $productName;
    protected $manufacturer;
    protected $price;
    protected $description;
    protected $updatedDate;
    protected $createdDate;
    protected $quantity;
    protected $userId;


    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    // SET METHODS
    public function setProductName(string $productName)
    {
        $this->productName = $productName;
    }

    public function setManufacturer(string $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    public function setUpdatedDate(string $updatedDate)
    {
        $this->updatedDate = $updatedDate;
    }

    public function setCreatedDate(string $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function setQuantity(string $quantity)
    {
        $this->quantity = $quantity;
    }

    public function setUserId(string $userId)
    {
        $this->description = $userId;
    }


    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function readAll()
    {
        $sth = $this->connection->prepare("SELECT * FROM Products LEFT JOIN users ON Products.userId = users.id;");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}