<?php
//    session_start();
//    var_dump($_SESSION["a"]);
//    if (!$_SESSION["a"])
//        $_SESSION["a"] = [1,2,3];
//    $_SESSION["a"][] = $_POST["x"];
//    var_dump($_SESSION);
//    class  Color {
//        public string $name = "none";
//        private string $_name = "none";
//        public  function __construct(string $name)
//        {
//            $this->name = $name;
//            $this->_name = $name;
//        }
//
//        public function getPrivateName(): string{
//            return $this->_name;
//        }
//    }
//
//    session_start();
//$_SESSION["colors"] = null;
//    var_dump($_SESSION);
//    if (isset($_SESSION["colors"]))
//        $colors = $_SESSION["colors"];
//    else
//        $colors = [new Color("red"), new Color("green")];
//    $colors[] = new Color($_POST["color"]);
//    $_SESSION["colors"] = $colors;
//    var_dump($colors);
//    echo  '<br>'. $colors[0]->getPrivateName();
//    $colors = $_POST["storage"];
//    if (!$colors)
//        $colors = "red green blue";
//    $colors = $colors ." ". $_POST["color"];
//
var_dump($_POST);
var_dump($_GET);
    ?>
<form action="." method="get">
    <input name="storage" type="hidden" value="">
    <input name="color" value="black">
    <input type="submit">
</form>
