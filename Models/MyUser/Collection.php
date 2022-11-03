<?php

namespace Models\MyUser;

use Models\MyUser;

class Collection
{
    public array $items;
    private int $nextId = 3;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function generateTestData()
    {
        $this->items = [
            new User(1, "admin", "admin", "https://thumbs.dreamstime.com/z/admin-sign-laptop-icon-stock-vector-166205404.jpg"),
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
            if ($user->id == $id) {
                return $user;
            }
        }
        return null;
    }

    public function getCollectionLoginStartsWith(string $login): ?UserCollection
    {
        $users = array_filter(
            $this->items,
            fn($user) => mb_strtoupper(
                mb_substr(
                    $user->login,
                    0,
                    mb_strlen($login) == mb_strtoupper($login)
                )
            )
        );
        return new UserCollection($users);
    }

    public function add(string $login, string $password, string $image): ?User
    {
        if (mb_strlen($password) < 3) {
            return null;
        }
        $user = new User($this->nextId++, $login, $password, $image);
        $this->items[] = $user;
        return $user;
    }

    public function addMany(Array $usersDataArray)
    {
        foreach ($usersDataArray as $userData)
        {
            $user = new User(
                $userData["id"],
                $userData["login"],
                $userData["password"],
                $userData["image"]
            );
            $this->items[] = $user;
        }
    }

    public function update(int $id, string $login, string $password): ?User
    {
        $user = $this->getById($id);
        if (!$user) {
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

    public function clear()
    {
        $this->items = [];
    }

    public function addUser (MyUser $user)
    {
        $this->items[] = $user;
    }

    public static function fromArray(Array $userDataArray): MyUser\Collection
    {
        $users = new MyUser\Collection();
        foreach ($userDataArray as $userData){
            $users->addUser(MyUser::fromArray($userData));
        }
        return  $users;
    }
}