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

    if($result) {
        echo "Welcome!";
        header("Location: /");
    } else {
        header("Location: /register");
    }
    die();
}

require "views/login.view.php";