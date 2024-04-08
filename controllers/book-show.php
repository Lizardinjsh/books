<?php

require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM books WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new DataBase($config);
$book = $db->execute($query, $params)->fetch();
// var_dump($books);


auth("views/book-show.view.php", $book);