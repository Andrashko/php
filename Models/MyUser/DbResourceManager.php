<?php

namespace Models\MyUser;

use Models\MyUser;
use PDO;

class DbResourceManager
{
    private PDO $dbh;

    public function __construct(string $dbName, string $host ="127.0.0.1", string $user = "root", string $password="")
    {
        $this->dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    }

    public function getAll(): Array
    {
        $sql = "SELECT * FROM users";
        return $this->dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): ?Array
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $sth = $this->dbh->prepare($sql);
        $sth->execute(["id" => $id]);
        $user = $sth->fetch(PDO::FETCH_ASSOC);
        if (!$user)
        {
            return null;
        }
        return $user;
    }

    public function add(Array $userData) : ?Array
    {
        if(! MyUser\Validator::isValid($userData)){
            return null;
        }
        $sql = "INSERT INTO Users (login, password, image) VALUES (:login, :password, :image)";
        $sth= $this->dbh->prepare($sql);
        $state = $sth->execute($userData);
        if (!$state) {
            var_dump($sth->errorInfo());
            return null;
        }
        $id = $this->dbh->lastInsertId();
        return $this->getById($id);
    }

    public function update(int $id,  Array $userData): ?Array
    {
        $user = $this->getById($id);
        if (!$user)
            return null;
        $fields = ["login", "password", "image"];
        foreach ($fields as $field)
            if (!isset($userData[$field]))
                $userData[$field] = $user[$field];
        $userData["id"] = $id;
        $sql = "UPDATE users SET login=:login, password=:password, image=:image WHERE id=:id";
        $sth = $this->dbh->prepare($sql);
        $state = $sth->execute($userData);
        if (!$state) {
            var_dump($sth->errorInfo());
            return null;
        }
        return $this->getById($id);
    }

    public function deleteById(int $id): ?Array
    {
        $user = $this->getById($id);
        if (!$user){
            return null;
        }
        $sql = "DELETE FROM users WHERE id = :id";
        $sth = $this->dbh->prepare($sql);
        $state = $sth->execute(["id" => $id]);
        if (!$state){
            var_dump($sth->errorInfo());
            return null;
        }
        return $user;
    }
}