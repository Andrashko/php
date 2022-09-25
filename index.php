<?php
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
echo "<table>";
echo "<tr> <th> name</th> <th>course</th> </tr>";
    for ($i=0; $i<count($students); $i++){
        echo "<tr>";
            foreach ($students[$i] as $key=>$value){
                echo "<td>$value</td>";
            }
        echo "</tr>";
    }
echo "</table>";

//    foreach ($students as $student){
//        var_dump($student);
//    }
?>

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
