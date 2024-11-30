<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "My notes";

$notes = $db->query("SELECT * FROM notes where user_id = 4")->get();


require "views/notes.view.php";