<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email) ) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password) ) {
    $errors['password'] = "Please provide a valid password.";
}

if (! empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

// check if the credentials match
$user = $db->query('select * from users where email = :email', [
  'email' => $email
])->find();


if ($user) {
  // we have a user, but we don't know if the password provided matches what we have in the database.
  if (password_verify($password, $user['password'])) {
    login([
      'email' => $email
    ]);

    header('location: /');
    exit();
  }
}

return view('sessions/create.view.php', [
  'errors' => [
    'email' => 'No matching account found for that email address and password.'
  ]
]);

