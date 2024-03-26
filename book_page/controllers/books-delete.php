<?php

require "Database.php";
$config = require "config.php";



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $book = $_POST["id"];
    $query = "DELETE FROM posts WHERE id = :id";
    $params = [":id" => $book];
    $db = new DataBase($config);
    $posts = $db->execute($query, $params)->fetchALL();
}
$query = "SELECT * FROM books"; 
$params = [];
$db = new DataBase($config);
$posts = $db->execute($query, $params)->fetchALL();


require "views/index.view.php";