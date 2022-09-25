<?php
$pi = 3.14;
$anonymFunction = function ($x) use ($pi) {
    return $x * $pi;
};



//callback

$arr = [1,3,5,0, 10];
var_dump(array_map(
    $anonymFunction,
    $arr
));

var_dump(array_map(
    function ($element){
        return $element+1;
    },
    $arr
));

var_dump(array_filter(
    $arr,
    function ($element){
        return $element % 2 == 0;
    }
));


// =>
var_dump(array_filter(
    $arr,
    fn ($element) => $element % 2 == 0
));



function myMap (array $arr, callable $callback): array{
    $result = [];
    foreach ($arr as $element){
        $result[] = $callback($element);
    }
    return $result;
}

var_dump(myMap($arr, fn($x)=>$x**3));

function swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a = 10;
$b = 5;
swap($a, $b);
echo "a = $a, b = $b";

function incArray(array &$arr){
    foreach (array_keys($arr) as $i){
        $arr[$i]++;
    }
}
$arr = [1,2,-3];
incArray($arr);
var_dump($arr);

// виклик через змінну
$functionName = "incArray";
$functionName($arr);
var_dump($arr);

function absX (float  $x) : float {
    if ($x<0)
        return -$x;
    return $x;
};

var_dump(array_map("absX", $arr));

//рекурсія
//n! = n* (n-1)!

function factorial (int $n): int{
    if ($n == 0)
        return 1;
    return $n * factorial($n-1);
}

echo factorial(5);

//замикання
function countCall (){
    static $count;
    if (isset($count))
        $count++;
    else {
        $count = 1;
        echo "init ";
    }
    return $count;
}

for ($i=0;$i<5;$i++)
    echo countCall()."<br>";

//доступність глобальни змінних
$globalVar = 42;
function testGlobal(){
    global $globalVar;
//    $globalVar = $GLOBALS["globalVar"];
    $localVar = 123;
    function testLocal()  {
        global $localVar;
        var_dump($localVar);
    };
    testLocal();
    var_dump(isset($globalVar));
    var_dump($globalVar);
}

testGlobal();
echo "<br>";

//функції
$pointA = [
    "x" => 3,
    "y" => 5
];
$pointB = [
    "x" => -2,
    "y" => 7
];
$pointC = [
    "x" => 0,
    "y" => -3
];



echo "AB:". distance($pointA, $pointB) . "<br>";
echo "AC:". distance($pointA, $pointC) . "<br>";
echo "BC:". distance($pointC, $pointB) . "<br>";

function distance(array  $point1, array  $point2) : float {
    $d = sqrt( ($point1["x"]-$point2["x"])**2 + ($point1["y"]-$point2["y"])**2);
    return $d;
}

var_dump($GLOBALS);

echo distance(2,3);

//function distance($point1, $point2){
//    $d = sqrt( ($point1["x"]-$point2["x"])**2 + ($point1["y"]-$point2["y"])**2+ ($point1["z"]-$point2["z"])**2);
//    return $d;
//}


