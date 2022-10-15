<?php

class User
{
    public int $id;
    public string $login;
    public string $password;
    public int $passwordLength;

    public function __construct(int $id, string $login, string $password)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = md5($password);
        $this->passwordLength = mb_strlen($password);
    }

    public function checkPassword(string $password):bool
    {
        return md5($password) == $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = md5($password);
    }
}