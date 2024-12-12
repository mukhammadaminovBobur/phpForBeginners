<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
require base_path("Core/Validator.php");

$errors = [];

$body = $_POST['body'];

if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = "Note no more than 1000 characters required";
}

if (!empty($errors)) {
    view("notes/create.view.php", [
        'heading' => "Notes create",
        'errors' => $errors
    ]);
    die();
}


if (empty($errors)) {
    $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 4
    ]);
    header("Location: /notes");
    die();
}
