<?php

namespace Models\MyUser;

class Validator
{
    private static function isLoginValid(string $login): bool
    {
        if (!isset($login))
            return false;
        if (mb_strlen($login) < 3) {
            return false;
        }
        return true;
    }

    private static function isPasswordValid(string $password): bool
    {
        if (!isset($password)){
            return false;
        }
        return true;
    }

    public static function isValid(array $userData): bool
    {
        return self::isLoginValid($userData["login"]) && self::isPasswordValid($userData["login"]);
    }
}