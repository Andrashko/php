<?php

include "User.php";

class UserCollection
{
    public array $items;
    private int $nextId = 3;
    public function __construct( array $items = null){
        $this->items = $items;
    }

    public  function generateTestData()
    {
        $this->items = [
            new User(1, "admin", "admin"),
            new User(2, "user", "qwerty")
        ];
    }

    public function getAll(): array
    {
        return $this->items;
    }

    public function getById(int $id): ?User
    {
        foreach ($this->items as $user) {
            if ($user->id == $id)
                return $user;
        }
        return null;
    }

    public function getCollectionLoginStartsWith(string $login): ?UserCollection
    {
        $users = array_filter(
            $this->items,
            fn($user)=> mb_strtoupper(mb_substr($user->login, 0,
                mb_strlen($login) == mb_strtoupper($login)))
        );
        return new UserCollection($users);
    }

    public function add(string $login, string $password): ?User
    {
        if (mb_strlen($password)<3)
            return null;
        $user = new User($this->nextId++, $login, $password);
        $this->items[] = $user;
        return $user;
    }

    public function update(int $id, string $login, string $password): ?User
    {
        $user = $this->getById($id);
        if (!$user){
            return null;
        }
        $user->login = $login;
        $user->setPassword($password);
        return $user;
    }

    public function deleteById(int $id): ?User
    {
        $user = $this->getById($id);
        if (!$user) {
            return null;
        }
        $index = array_search($user, $this->items);
        array_splice($this->items, $index, 1);
        return $user;
    }

    public function toHtml(): string
    {
        $template = '<table class="users"><tr> <th> id </th> <th> login </th> <th> password</th></tr>';
        foreach ($this->items as $user)
        {
            $row = "<tr> <td> $user->id </td> <td>$user->login </td> <td>$user->password </td></tr>";
            $template .= $row;
        }
        $template .= "</table>";
        return $template;
    }
}