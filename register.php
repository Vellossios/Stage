<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    require_once "config.php";

    $login = $_POST["login"];
    $password = md5($_POST["password"]);
    $password_repeath = md5($_POST["password-repeath"]);

    $mysqli = databaseConnect();
    $result = $mysqli->query("SELECT * FROM utilisateur WHERE BINARY username = '$login'");

    
    if ( $result->num_rows != 0 )
    {
        header("Location: index.php?code=$returnCode&page=register&code=2");
    }
    elseif($password === $password_repeath)
    {
        $user_result = $mysqli->query("INSERT INTO utilisateur (username, password) VALUES ('$login', '$password')");
        header("Location: index.php");
    }
    else
    {
        header("Location: index.php?code=$returnCode&page=register&code=0");
    }
    
?>