<?php
//var_dump($x);
//
//function localInclude ()
//{
//    include "./src/resources.php";
//    var_dump($x);
//}
//localInclude();
//var_dump($x);
//
//var_dump(sqr(PI));

//include "./src/OOP/Person.php";
//include "./src/Example/Person.php";
include "./src/Example/const.php";

use  OOP\Person;

var_dump(class_exists("Example\Person"));
spl_autoload_register(
    function ($classname)
    {
        echo "autoload <br>";
        var_dump($classname);
        $path = "./src/$classname.php";
        var_dump($path);
        include $path;
    }
);

spl_autoload_register(
    function ($classname)
    {
        include "./$classname.php";
    }
);
var_dump(class_exists("Example\Person"));

$person = new Example\Person("Test");
$person = new Person("");
var_dump(class_exists("Example\Person"));
var_dump($person);
var_dump(OOP\PI);
var_dump(Example\PI);