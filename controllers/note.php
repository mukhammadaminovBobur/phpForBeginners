<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";
$user_id = 4;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort(Response::NOT_FOUND);
}


if ($note['user_id'] != $user_id) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";