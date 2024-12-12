<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$user_id = 4;

//get note id and find from database and authorize
$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_POST['id']
])->findOrFail();

//authorize
authorize($note['user_id'] == $user_id);

$db->query("DELETE FROM notes where id = :id", [
    'id' => $_POST['id']
]);

header("Location: /notes");



