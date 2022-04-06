<?php

// Table de routage

$router -> map('GET|POST', '/', 'app', 'App Page');
$router -> map('GET|POST', '/login', 'login', 'Login page');
$router -> map('GET|POST', '/admin', 'admin', 'Admin panel page');
$router -> map('GET', '/logout', 'logout', 'Logout action');


require 'routes/rule.php';