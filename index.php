<?php
use Models\MyUser;


spl_autoload_register(function ($className)
{
    if (!class_exists($className)) {
        include $className . '.php';
    }
});


$repository = new MyUser\DbResourceManager("userdb");
$testUser = $repository->add([
    "login"=>"test",
    "password"=>"test",
    "image"=>MyUser::NO_IMAGE
]);
$userCollection = MyUser\Collection::fromArray($repository->getAll());
echo MyUser\Render::render($userCollection);

var_dump($testUser);
$testUser = $repository->update(
    $testUser["id"],
    [
        "login" => "new",
// "password" => "123"
    ]
);
var_dump($testUser);
$repository->deleteById($testUser["id"]);
var_dump($repository->getAll());
