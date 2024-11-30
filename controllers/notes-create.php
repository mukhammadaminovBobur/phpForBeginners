<?php
$config = require "config.php";
$db = new Database($config['database']);
require "Validator.php";


$heading = "Notes create";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    $body = $_POST['body'];

    if (!Validator::string($body, 1, 1000)){
        $errors['body'] = "Note no more than 1000 characters required";
    }


    if (empty($errors)){
        $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 4
        ]);
    }
}

require "views/notes-create.view.php";