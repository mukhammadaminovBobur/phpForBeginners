<?php
//phpinfo();

require "functions.php";
require "Database.php";
//require "router.php";

//connect to the database
$config = require "config.php";

$db = new Database($config['database']);

$id = $_GET['id'];
//do not put the $id directly into the query from the user input
$query = "SELECT * FROM posts where id = :id";

$posts = $db->query($query, ["id" => $id])->fetch();

dd($posts);

