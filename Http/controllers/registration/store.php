<?php

use Core\App;
use Core\Database;
use Core\Middleware\Authenticator;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form input

$errors = [];

if (! Validator::email($email)) {
    $errors['email'] =
        'Please provide a valid email adress.';
}
if (! Validator::string($password, 7, 255)) {
    $errors['password'] =
        'Please provide a password at least 7 charcaters';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
} else {
    $db->query("INSERT INTO users (email,password) VALUES (:email,:password)", [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    (new Authenticator)->login($user);

    redirect('/');
}
