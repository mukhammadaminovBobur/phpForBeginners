<?php
$config = require "config.php";
$db = new Database($config['database']);

$heading = "Notes create";

//if reques is POST dd($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 4
    ]);
}

require "views/notes-create.view.php";