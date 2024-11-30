<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);
$user_id = 4;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

}else{
    $note = $db->query("SELECT * FROM notes where id = :id", [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] == $user_id);

    view("notes/show.view.php", [
        'heading' => "Note",
        'note' => $note
    ]);
}

