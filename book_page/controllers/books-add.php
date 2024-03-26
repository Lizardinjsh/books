<?php

require "Database.php";
$config = require "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $title = $_POST["title"];           
    $author = $_POST["author"];
    $releaseDate = $_POST["releaseDate"];
    $availability = $_POST["availability"];
    $query = "INSERT INTO 
    books (name, author, release_date, availability) 
    VALUE 
    (:title, :author, :releaseDate, :availability );";
    $params = [":title" => $title, ":author" => $author, ":releaseDate" => $releaseDate, ":availability" => $availability];
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
    header("Location: /");
    die();
}

require "views/books-add.view.php";
