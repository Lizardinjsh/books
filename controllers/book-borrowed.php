<?php

require "Database.php";
$config = require "config.php";



    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();


    $query = "SELECT * FROM borrowed_books WHERE user_id = :id"; 
    $params = [":id" => $user["id"]];
    $db = new DataBase($config);
    $book = $db->execute($query, $params)->fetchAll();


auth("views/book-borrowed.view.php", $book, $user);