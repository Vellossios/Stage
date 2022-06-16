<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);

    /*Connection a la base de donnée*/
    require_once "config.php";

    $login = $_POST["login"];
    $password = md5($_POST["password"]);

    $mysqli = databaseConnect();

    $user_result =  $mysqli->query("SELECT * FROM utilisateur WHERE BINARY username = '$login' and BINARY password = '$password'");
    // echo $user_result->num_rows;
    $user= $user_result->fetch_assoc();
    // foreach($users as $user)
    // {
    //     echo $user["username"] . "<br>";
    // }

    $returnCode = 0;

    if ($user_result->num_rows == 1)
    {
        $_SESSION["login"] = $user["username"];
        $returnCode = 1;
    }

    header("Location: index.php?code=$returnCode");

?>