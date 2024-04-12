<?php

require "Database.php";
$config = require "config.php";

    $query = "SELECT * FROM user WHERE id = :id"; 
    $params = [":id" => $_SESSION["user-id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM books WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $book = $db->execute($query, $params)->fetch();
    
    $query = "DELETE FROM Borrowings WHERE book_id = :id";
    $params = [":id" => $_GET["id"]];
    $db->execute($query, $params);

    

    $query = "UPDATE books SET availability = availability + 1 WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db->execute($query, $params);

header("Location: /Borrowings?id=" . $_SESSION["user-id"]);