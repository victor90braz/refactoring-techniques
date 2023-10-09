<?php

namespace Core\Middleware;

$_SESSION = [];

header('location: /');
exit();