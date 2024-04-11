<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";

$errors = [];
$books = [];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $bookName = $_POST["name"];
    $bookAuthor = $_POST["author"];
    $bookReleaseDate = $_POST["releaseDate"];
    $bookAvailability = $_POST["availability"];
    if(!Validator::string($bookName, min_len: 1, max_len: 255))
    {
        $errors["name"] = "Name cannot be empty or too long";
    }
    if(!Validator::string($bookAuthor, min_len: 1, max_len: 255))
    {
        $errors["author"] = "Author cannot be empty or too long";
    }
    if(!Validator::date($bookReleaseDate))
    {
        $errors["releaseDate"] = "Not valid or not correct format YYYY-MM-DD";  
    } 
    if(!Validator::number($bookAvailability))
    {
        $errors["availability"] = "Cannot be empty or not a number";  
    } 
    if(empty($errors))
    {
        $query = "INSERT INTO 
        books (name, author, release_date, availability) 
        VALUE 
        (:name, :author, :releaseDate, :availability );";
        $params = [":name" => $bookName, ":author" => $bookAuthor, ":releaseDate" => $bookReleaseDate, ":availability" => $bookAvailability];
        $db = new DataBase($config);
        $books = $db->execute($query, $params)->fetchALL();
        header("Location: /");
        die();
    }
}

auth("views/books-add.view.php", $books, [], $errors);
