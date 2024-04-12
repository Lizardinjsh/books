<?php

require "Database.php";
$config = require "config.php";



    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM Borrowings WHERE user_id = :user_id"; 
    $params = ["user_id" => $user["id"]];
    $Borrowings = $db->execute($query, $params)->fetchAll();

    $query = "SELECT * FROM books"; 
    $params = [];
    $book = $db->execute($query, $params)->fetchAll();

    $book = [$Borrowings, $book];


auth("views/book-borrowed.view.php", $book, $user);