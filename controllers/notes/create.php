<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");
$db = new Database($config['database']);
require base_path("Core/Validator.php");


$heading = "Notes create";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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

view("notes/create.view.php", [
    'heading' => "Notes create",
    'errors' => $errors
]);