<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$user_id = 4;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] == $user_id);

$body = $_POST['body'];

if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = "Note no more than 1000 characters required";
}

if (!empty($errors)) {
    view("notes/edit.view.php", [
        'heading' => "Notes edit",
        'errors' => $errors,
        'note' => $note
    ]);
    die();
}


if (empty($errors)) {
    $db->query("UPDATE notes SET body = :body where id = :id", [
        'body' => $_POST['body'],
        'id' => $_POST['id']
    ]);

    header("Location: /notes");
}



