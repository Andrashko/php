<?php
    /*
     * користувач (id, Логін, пароль)
     * колекція користувачів CRUD
     * вивыд в таблицю
     */


include "./src/task3/UserCollection.php";

$users = new UserCollection();
$login = $_GET["login"];
$users->addNewUser("test", "qwerty");
echo $users->getCollectionLoginStartsWith($login)->toHtml();

?>
<h2> Query string = <?= $login ?> </h2>


<style>
    .users, td, th{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
