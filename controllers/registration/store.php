<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Password must be at least 7 characters';
}

if (!empty($errors)) {
    view("registration/create.view.php", [
        'errors' => $errors,
    ]);
    die();
}

$db = App::resolve(Database::class);
$user = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

if ($user) {
    header('Location: /');
    exit();
} else {
    $db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
        'email' => $email,
        'password' => $password
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('Location: /');
    exit();
}