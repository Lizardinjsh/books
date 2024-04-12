
<?php
require "Database.php";
require "Validator.php";
$config = require "config.php";


$query = "SELECT * FROM books WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$book = $db->execute($query, $params)->fetch();
$errors = [];
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
        $query = "UPDATE books SET name = :name, author = :author, publication_year = :publication_year, availability = :availability  WHERE id = :id";
        $params = [":name" => $bookName, ":author" => $bookAuthor, ":publication_year" => $bookReleaseDate, ":availability" => $bookAvailability, ":id" => $_GET["id"]];
        // $db = new Database($config);
        $books = $db->execute($query, $params)->fetch();
        header("Location: /");
    }
}



$page_title = "Edit book ".$_GET["id"];
auth("views/book-edit.view.php", $book, [], $errors);
