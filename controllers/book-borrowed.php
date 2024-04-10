<?php

require "Database.php";
$config = require "config.php";



    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM borrowed_books"; 
    $params = [];
    // $db = new DataBase($config);
    $borrowed_books = $db->execute($query, $params)->fetchAll();

    $query = "SELECT * FROM books"; 
    $params = [];
    // $db = new DataBase($config);
    $book = $db->execute($query, $params)->fetchAll();

    $book = [$borrowed_books, $book];

    //  var_dump($book);
    // $query = "SELECT borrowed_books.*, books.id
    // FROM borrowed_books
    // INNER JOIN books ON borrowed_books.user_id = books.id
    // WHERE borrowed_books.user_id = :id;"; 
    // $params = [":id" => $user["id"]];
    // $db = new DataBase($config);
    // $book = $db->execute($query, $params)->fetchAll();


auth("views/book-borrowed.view.php", $book, $user);