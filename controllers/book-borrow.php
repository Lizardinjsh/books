<?php

require "Database.php";
$config = require "config.php";

    $t = time();
    $date = date_create(date("Y-m-d H:i:s", $t));
    date_modify($date, '+1 day');

    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_SESSION["user-id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM books WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $book = $db->execute($query, $params)->fetch();

    $query = "INSERT INTO 
    borrowed_books (name, return_date, book_id, user_id) 
    VALUE 
    (:name, :return_date, :book_id , :user_id);"; 
    $params = [":name" => $book["name"], ":return_date" => $date->format("Y-m-d H:i:s"), ":book_id" => $book["id"], ":user_id" => $user["id"]];
    $db = new DataBase($config);
    $db->execute($query, $params)->fetch();

    $query = "UPDATE books SET availability = availability - 1 WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db->execute($query, $params);

    header("Location: /");