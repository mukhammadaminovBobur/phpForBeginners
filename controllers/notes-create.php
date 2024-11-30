<?php


$heading = "Notes create";

//if reques is POST dd($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST);
}

require "views/notes-create.view.php";