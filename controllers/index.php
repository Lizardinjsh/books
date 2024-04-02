<?php

require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM books"; 
$params = [];
$db = new DataBase($config);
$books = $db->execute($query, $params)->fetchALL();



require "views/index.view.php";