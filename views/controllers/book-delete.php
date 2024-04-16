<?php

require "Database.php";
$config = require "config.php";



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $book = $_POST["post-selected"];
    $query = "DELETE FROM books WHERE id = :id";
    $params = [":id" => $book];
    $db = new DataBase($config);
    $books = $db->execute($query, $params)->fetchALL();
}
$query = "SELECT * FROM books"; 
$params = [];
$db = new DataBase($config);
$books = $db->execute($query, $params)->fetchALL();


require "views/books-delete.view.php";