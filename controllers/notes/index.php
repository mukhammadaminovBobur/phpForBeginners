<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query("SELECT * FROM notes where user_id = 4")->get();


view("notes/index.view.php", [
    'heading' => "My notes",
    'notes' => $notes
]);