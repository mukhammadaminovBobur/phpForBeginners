<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";
$user_id = 4;

$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] == $user_id);

require "views/note.view.php";