<?php

namespace App\models;

use App\Connection;
use PDO;


class Orders
{
    private $connection;

    public function __construct()
    {
        $this->connection = (new Connection())->connect();
    }

    protected $id;
    protected $customerId;
    protected $dateOfSale;
    protected $paymentMark;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getDateOfSale()
    {
        return $this->dateOfSale;
    }

    public function getPaymentMark()
    {
        return $this->paymentMark;
    }


    // SET METHODS
    public function setCustomerId(string $customerId)
    {
        $this->customerId = $customerId;
    }

    public function setDateOfSale(string $dateOfSale)
    {
        $this->dateOfSale = $dateOfSale;
    }

    public function setPaymentMark(string $paymentMark)
    {
        $this->paymentMark = $paymentMark;
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