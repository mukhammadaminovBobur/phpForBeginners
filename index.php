<?php
//phpinfo();

require "functions.php";
require "Database.php";
//require "router.php";

//connect to the database
$config = require "config.php";

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM posts")->fetchAll();

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";

}

