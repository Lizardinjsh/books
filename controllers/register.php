<?php

require "Database.php";
$config = require "config.php";




if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $password = $_POST["password"];           
    $username = $_POST["username"];
    $query = "INSERT INTO 
    user (username, password) 
    VALUE 
    (:username, :password);";
    $params = [":username" => $username, ":password" => $password];
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
    header("Location: /");
    die();
}



guest("views/register.view.php");