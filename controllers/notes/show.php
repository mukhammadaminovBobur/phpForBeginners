<?php

$config = require base_path("config.php");
$db = new Database($config['database']);

$user_id = 4;
$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] == $user_id);

view("notes/show.view.php", [
    'heading' => "Note",
    'note' => $note
]);