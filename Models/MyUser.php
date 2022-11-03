<?php

namespace Models;

class MyUser
{
    public int $id;
    public string $login;
    public string $password;
    public int $passwordLength;
    public string $image;
    const NO_IMAGE = "https://schoolshop-lab.jp/wp-content/uploads/2018/11/240ec862387d03003cb4c41cd93cb0be.png";

    public function __construct(int $id, string $login, string $password, string $image = self::NO_IMAGE)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = md5($password);
        $this->passwordLength = mb_strlen($password);
        $this->image = $image;
    }

    public function checkPassword(string $password):bool
    {
        return md5($password) == $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = md5($password);
    }

    public static function fromArray(Array $userData): ?MyUser
    {
        if (!MyUser\Validator::isValid($userData)){
            return null;
        }

        return new MyUser(
            $userData["id"],
            $userData["login"],
            $userData["password"],
            $userData["image"] ?? self::NO_IMAGE
        );
    }
}