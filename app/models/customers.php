<?php

namespace App\models;

use PDO;
use PDOStatement;

class customers
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }


    // SET METHODS
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        $sth = $this->connection->prepare("SELECT * FROM epiugoWest.Customers LEFT JOIN Orders ON Customers.id = Orders.customerId WHERE Customers.id = $id;");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readAll()
    {
        $sth = $this->connection->prepare("SELECT * FROM epiugoWest.Customers");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}