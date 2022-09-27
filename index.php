<?php
$dsn = 'mysql:host=127.0.0.1;dbname=studentdb;charset=utf8';
$user = 'testuser';
$password = 'qwerty';
$dbh = new PDO($dsn, $user, $password);
$sql = "SELECT * FROM students;";
$stat = $dbh->query($sql);
$student = $stat->fetch(PDO::FETCH_NAMED);
$students = $stat->fetchAll();
//var_dump($students);
//$students = $stat->fetch();
//var_dump($students);
//$stat->closeCursor();
//$sql = 'INSERT INTO students (name, surname, age, group_id) VALUES ("Ian", "Ivko", 21, 2)';
//$res = $dbh->exec($sql);
//$sql = 'INSERT INTO students (name, surname, age, group_id) VALUES (:name, :surname, :age, :group_id)';
//$req = $dbh->prepare($sql);
//var_dump($req);
//$res = $req->execute(
//        [
//            "name" => "Юрій",
//            "surname" => "Андрашко",
//            "age" => 34,
//            "group_id" => 1
//        ]
//);

//$sql = 'INSERT INTO students (name, surname, age, group_id) VALUES (?, ?, ?, ?)';
//$req = $dbh->prepare($sql);
////var_dump($req);
//$res = $req->execute(
//    ["Юрій", "Андрашко", "сорок", 2]
//);
//var_dump($res);
//if (!$res)
//{
//    var_dump($req->errorInfo());
//}
    $students = [
        [
            "name" => "Yurii",
            "course" => 1,
            "surname" => "Shevchenko"
        ],
        [
            "name" => "Maria",
            "course" => 4,
            "surname" => "Andrienko",
        ]
    ];
//echo "<table>";
//echo "<tr> <th> name</th> <th>course</th> </tr>";
//    for ($i=0; $i<count($students); $i++){
//        echo "<tr>";
//            foreach ($students[$i] as $key=>$value){
//                echo "<td>$value</td>";
//            }
//        echo "</tr>";
//    }
//echo "</table>";
//
////    foreach ($students as $student){
////        var_dump($student);
////    }
?>
<!---->
<table>
    <tr>
        <?php foreach (array_keys($students[0]) as $key):?>
            <th> <?= $key ?></th>
        <?php endforeach;?>
    </tr>
    <?php foreach ($students as $student):?>
    <tr>
<!--        <td> --><?//= $student["name"] ?><!-- </td>-->
<!--        <td> --><?//= $student["course"] ?><!-- </td>-->
        <?php foreach ($student as $key=>$value):?>
            <td> <?= $value ?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table>


<form>
    <input name="surname" value="<?= $student['surname']?>">
    <input name="name" value="<?= $student['name']?>">
    <input name="age" type="number" value="<?= $student['age']?>">
</form>