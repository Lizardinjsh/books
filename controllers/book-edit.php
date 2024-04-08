
<?php
require "Database.php";
require "Validator.php";
$config = require "config.php";


$query = "SELECT * FROM books WHERE id = :id"; 
$params = [":id" => $_GET["id"]];
$db = new Database($config);
$book = $db->execute($query, $params)->fetch();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $bookName = $_POST["name"];
    $bookAuthor = $_POST["author"];
    $bookReleaseDate = $_POST["releaseDate"];
    $bookReleaseDate = $_POST["releaseDate"];
    $errors = [];
    if(!Validator::string($_POST["post-title"], min_len: 1, max_len: 255))
    {
        $errors["title"] = "Title cannot be empty or too long";
    }
    if(!Validator::string($_POST["post-content"], min_len: 1, max_len: 255))
    {
        $errors["content"] = "Content cannot be empty or too long";
    }
    if(!Validator::number($_POST["post-category-id"], min: 1, max: 3))
    {
        $errors["category-id"] = "There is no sucha id or not number at all";  
    } 
    if(empty($errors))
    {
        $query = "UPDATE books SET name = :name, author = :author, release_date = :release_date WHERE id = :id";
        $params = [":title" => $_POST["post-title"], ":content" => $_POST["post-content"], ":category_id" => $_POST["post-category-id"], ":id" => $_GET["id"]];
        // $db = new Database($config);
        $post = $db->execute($query, $params)->fetch();
        header("Location: /");
    }
}



$page_title = "Edit blog ".$_GET["id"];
auth("views/book-edit.view.php", $book);
