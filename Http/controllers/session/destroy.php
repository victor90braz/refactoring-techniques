<?php

// Create an instance of the Authenticator class
$authenticator = new Core\Authenticator();

// Call the logout method
$authenticator->logout();

header('location: /');
exit();