<?php

require "Database.php";
$config = require "config.php";

    $date = new DateTime('now', new DateTimeZone("Europe/Riga"));
    // $date = $now->format('Y-m-d H:i:s');
    date_modify($date, '+1 day');

    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_SESSION["user-id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM books WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $book = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM borrowed_books WHERE user_id = :user_id AND name = :name"; 
    $params = [":user_id" => $user["id"], ":name" => $book["name"]];
    $borrowed_books = $db->execute($query, $params)->fetch();

    if($borrowed_books == false)
    {
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
    }else
    {
        $errors["borrow"] = "You already have this book!";
        header("Location: /show?id=".$_GET["id"]."&error=true");
    }

    $page_title = "Borrowing";