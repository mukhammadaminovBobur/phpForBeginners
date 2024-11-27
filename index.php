<?php

require "functions.php";
//require "router.php";

//connect to the database
$dns = "mysql:host=localhost;port=3306;dbname=phpForBeginners;user=root;charset=utf8mb4";

$pdo = new PDO($dns);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";

}