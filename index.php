<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('login', 'DefaultController');
Routing::get('my_list', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('details', 'DefaultController');
Routing::get('search', 'DefaultController');
Routing::run($path);