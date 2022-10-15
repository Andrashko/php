<?php
//    $login = $_POST["login"];
//    $login = filter_var($login, FILTER_SANITIZE_STRING );
//    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
////    $email = $_POST["email"];
////    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//    $url = $_POST["url"];
//    if (filter_var($url, FILTER_VALIDATE_URL, 		[
//            'default' => "https://go.com?id=2",
//            'flags' => FILTER_FLAG_QUERY_REQUIRED,
//    ] ))
//        echo  $url;
//    else
//        echo "wrong url";
//        $sql = "SELECT * FROM Users WHERE login = :login;
//    echo $sql;
///
//    echo filter_var("10,003.14", FILTER_VALIDATE_FLOAT, [
//        "options" =>[
//            "min_range" => 0,
//            "max_range" => 10,
//            "default" => 42.3
//        ],
//
//    ]);

var_dump(filter_input_array(
    INPUT_POST,
    [
        "login" => FILTER_SANITIZE_STRING,
        "email" => FILTER_SANITIZE_EMAIL,
        "url" => [
            "filter" => FILTER_VALIDATE_URL,
            "options" => ["default" => "localhost"]
        ]
    ]
));
?>
<h2> user data </h2>
<p>
    Login: <?= $login ?> <br>
    Email: <?= $email ?>
</p>


<h2> input form </h2>
<form method="post" action=".">
    <input name="login" placeholder="login"> <br>
    <input name="password" placeholder="password"> <br>
    <input name="email" placeholder="email"> <br>
    <input name="list" placeholder="list"> <br>
    <input name="url" placeholder="url"> <br>
    <input type="submit">
</form>
