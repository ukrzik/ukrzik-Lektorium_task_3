<?php

namespace App\models;

use App\Connection;
use PDO;

class users
{
    private $connection;

    public function __construct()
    {
        $this->connection = (new Connection())->connect();
    }

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    protected $role;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRole()
    {
        return $this->role;
    }


    // SET METHODS
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setRole(string $role)
    {
        $this->role = $role;
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
        $sth = $this->connection->prepare("SELECT * FROM epiugoWest.users");
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