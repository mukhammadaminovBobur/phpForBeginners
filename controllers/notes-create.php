<?php
$config = require "config.php";
$db = new Database($config['database']);

$heading = "Notes create";

//if reques is POST dd($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    $body = $_POST['body'];

    if (strlen($body) == 0) {
        $errors['body'] = "Note cannot be empty";
    }

    if (strlen($body) > 1000){
        $errors['body'] = "Note can not be longer than 1000 characters";
    }

    if (empty($errors)){
        $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 4
        ]);
    }
}

require "views/notes-create.view.php";