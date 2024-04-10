<?php

require "Database.php";
$config = require "config.php";

    $t = time();

    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_SESSION["user-id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM books WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db = new DataBase($config);
    $book = $db->execute($query, $params)->fetch();

    $query = "INSERT INTO 
    borrowed_books (name, date, user_id) 
    VALUE 
    (:name, :date, :user_id);"; 
    $params = [":name" => $book["name"], ":date" => date("Y-m-d",$t), ":user_id" => $user["id"]];
    $db = new DataBase($config);
    $book = $db->execute($query, $params)->fetch();

    header("Location: /");