<?php

require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM books"; 
$params = [];
$db = new DataBase($config);
$books = $db->execute($query, $params)->fetchAll();
var_dump($books);


auth("views/index.view.php");