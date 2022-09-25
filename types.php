<h2> PHP code </h2>

<?php
// коментар
/*
коментар
в
декілька рядків
*/

// змінні
$x = 1;
$myAge = 33;

// цілі числа int
$number = 123;
echo $number . "<br>";
var_dump($number, $number+1);
echo "кількість біт " . (PHP_INT_SIZE * 8) . "<br>";
echo "максимальне ціле число:" . PHP_INT_MAX  . "<br>";
echo "максимальне ціле число:" . (PHP_INT_MAX + 1) . "<br>";
var_dump((PHP_INT_MAX + 1));
var_dump($number / 2);
var_dump(0x123abf); // 16-кова система
var_dump(0b1011110); // двійкова система

// дійсні числа float
$floatNumber = 1.23;
echo "<h3> float </h3>";
echo $floatNumber . "<br>";
echo 1.23e-10 . "<br>";
echo "максимальне дійсне число:" . PHP_FLOAT_MAX  . "<br>";
echo "максимальне дійсне число:" . PHP_FLOAT_MAX * 2 . "<br>";
INF; //нескінченність

echo  "епсілон (мінімальна різниця при порівнянні 2 дійсних чисел)" . (PHP_FLOAT_EPSILON) ."<br>";

var_dump( 1 + PHP_FLOAT_EPSILON * 0.5 == 1.0);

echo "Not a number " . (INF/INF);

echo "<h3> bool </h3>";
$boolValue = true;
$boolValue = false;
var_dump($boolValue);
echo $boolValue; //"" "1"

echo "<h3> string </h3>";

$str = "some \" text\" ";
echo $str;
$str = 'text';
echo "<p>$str</p>";
echo "$number <br>";
echo "first" . "second"; //
$str .= "!";
echo "<p>$str</p>";

var_dump($str);

var_dump((int) "123.45px");
var_dump((float) "xxxx");
var_dump((string) 123.45);

echo "<h3>Null</h3>";


var_dump($unset);

unset($number);
var_dump($number);

echo "<h3>Передача адреси</h3>";

$x = 2;
$y = $x;
$z = &$x;
$x++;
var_dump($y);
var_dump($z);
$z *= 2;
var_dump($x);

echo "<h3>Константи</h3>";
define("PI", 3.14);
const E = 2.8;
echo E ." " . PI;
?>

<h2> інлайн вставки </h2>
<ul>
    <li>
        <?= $number ?>
        <?php echo $number ?>
    </li>
    <li>
        <?= $number ** 2 ?>
    </li>
</ul>


