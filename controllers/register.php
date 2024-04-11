<?php

require "Database.php";
$config = require "config.php";



$errors = [];


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $password = $_POST["password"];           
    $username = $_POST["username"];
    $query = "SELECT * FROM user WHERE username = :username AND password = :password";
    $params = [":username" => $username, ":password" => $password];
    $db = new DataBase($config);
    $result1 = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM user WHERE username = :username";
    $params = [":username" => $username];
    $db = new DataBase($config);
    $result2 = $db->execute($query, $params)->fetch();
    if($result1 != false)
    {
        $errors["register"] = "You already have an account!";
    }else if($result2 != false)
    {
        $errors["register"] = "You already have an account!";
    }else
    {
        $query = "INSERT INTO 
        user (username, password) 
        VALUE 
        (:username, :password);";
        $params = [":username" => $username, ":password" => $password];
        $db = new DataBase($config);
        $posts = $db->execute($query, $params)->fetchALL();
        header("Location: /");
    }
}



guest("views/register.view.php", $errors);