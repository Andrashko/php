<h1> array </h1>
<?php
echo "<h3> functions </h3>";
$arr = [102,5,2,4,300,"3",];
$arr2 = [3,4,5,123,125];

var_dump(array_diff($arr, $arr2));
echo "<br>";
var_dump(array_intersect($arr2, $arr));
echo "<br>";

echo count($arr);
echo "<br>";

asort($arr);
var_dump($arr);
echo "<br>";

var_dump(array_keys($arr));
var_dump(array_values($arr));
echo "<br>";

var_dump(array_key_exists(5, $arr));
var_dump(array_key_exists(10, $arr));
echo "<br>";

var_dump(in_array("3", $arr));
var_dump(in_array("one", $arr));
echo "<br>";

var_dump(array_slice($arr, 1, 1));
echo "<br>";

$index = array_search(3, $arr, true);
var_dump($index);



array_push($arr, 6);
var_dump($arr);
echo "<br>";
var_dump(array_pop($arr));
echo "<br>";
var_dump($arr);
echo "<br>";
array_unshift($arr, 6);
var_dump($arr);
echo "<br>";
var_dump(array_shift($arr));
echo "<br>";
var_dump($arr);
echo "<br>";

$words = explode(" ", "Some long text");
var_dump($words);
echo "<br>";
$string = implode(", ", $words);
var_dump($string);
echo "<br>";



$arr1 = array(1, 3, -10);
var_dump($arr1);
echo "<br>";
$arr1_mix = array(1, 3.5, "three", false);
var_dump($arr1_mix);
echo "<br>";
$arr2 = ["red", "green", "blue"];
var_dump($arr2);
echo "<br>";
var_dump( $arr1[10]);
echo "<br>";
$arr1[5] = 12;
var_dump($arr1);
echo "<br>";
var_dump( $arr1[5]);
echo "<br>";
$arr1[] = 13;
var_dump($arr1);
echo "<br>";
$arr1[-1] = 123;
var_dump( $arr1[-1]);
echo "<br>";
var_dump( $arr1[1.5]);
echo "<br>";

$arr3 = [
    0 => "false",
    1 => "true"
];

var_dump($arr3);
echo "<br>";

$arr4 = [
    "true" => 1,
    "false" => 0
];
var_dump($arr4);
echo "<br>";

//$arr6 = [
//    [1,2,3] => 5 // int or string index
//];
