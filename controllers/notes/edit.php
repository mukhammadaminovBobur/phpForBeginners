<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$user_id = 4;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $user_id);

view("notes/edit.view.php", [
    'heading' => "Notes edit",
    'note' => $note,
    'errors' => []
]);