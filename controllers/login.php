<?php

require "Database.php";
$config = require "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $password = $_POST["password"];           
    $username = $_POST["username"];
    $query = "SELECT * FROM user WHERE username = :username AND password = :password";
    $params = [":username" => $username, ":password" => $password];
    $db = new DataBase($config);
    $result = $db->execute($query, $params)->fetch();
    // var_dump($result);
    if($result) {
        session_start();
        $_SESSION["user"] = true;
        $_SESSION["username"] = $_POST["username"];
        echo "Welcome!";
        header("Location: /");
    } else {
        header("Location: /register");
    }
    die();
}



guest("views/login.view.php");