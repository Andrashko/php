<?php
$colors = array("red", "green", "blue", "black");
?>

<?php if ($colors): ?>
    <ol>
        <?php foreach ($colors as $color): ?>
            <li> <?= $color ?> </li>
        <?php endforeach; ?>
    </ol>
<?php else: ?>
    <p>Порожній список</p>
<?php endif; ?>

    <style>
        td {
            border: 2px solid black;
            width:50px;
            height: 50px;
        }
        table {
            border-collapse: collapse;
        }
        .black {
            background: black;
        }
        .white {
            background: white;
        }
    </style>
    <h3> шахова дошка </h3>
    <table>
        <?php for ($row=0;$row<8; $row++): ?>
            <tr>
                <?php for ($col=0; $col<8; $col++): ?>
                    <td class="<?= ($row+$col)%2 == 0? 'black': 'white' ?> ">

                    </td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<?php
//лінійний
$x = 2;
echo $x;
echo "<br>";
//з розгалудженням
if ($x>0){
    echo "Positive";
} else {
    echo "negative";
}
echo "<br>";

if ($x % 2 == 0){
    echo "Even";
}

//приведення до логычного типу
echo "<br>";
if ($x) {
    echo "not zero";
}

// складні умови
echo "<br>";
if ($x>0 && $x<12){ // && || !
    echo "ok";
}

//Тернарний оператор
echo "<br>";
$y = $x>0 ? -$x: 2*$x;
echo $y;

// альтернативне значення
echo "<br>";
$a = 33;
$age = $a ?? 18; //
if (isset($a))
    $age = $a;
else
    $age = 18;
echo $age;

// вибір
echo "<br>";
switch ($x){
    case 0:
        echo "zero";
        break;
    case 2:
        echo "two";
        break;
    default:
        echo "something other";
}

$mark = 85;
echo "<br>";
switch (true){
    case $mark>=90:
        echo "A";
        break;
    case $mark<90 && $mark >=82:
        echo "B";
        break;
    //...
    default:
        echo "Error";
}

//циклічні
$n=3;
for($i=0; $i<$n;$i++) {
    echo "$i <br>";
}

$i=0;
while ($i<$n) {
    echo "$i <br>";
    $i++;
}

$i=0;
do {
    echo "$i <br>";
    $i++;
} while ($i<$n);

echo "<br>";
$arr = array(1,3,7,-5,2);

foreach ($arr as $element){
    echo "$element,";
}
?>