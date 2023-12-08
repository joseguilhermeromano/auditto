<?php

session_start();

include("../src/router/routers.php");

$url = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '/')+1);

$router = explode('@', $routers['/'.$url]);

$className = $router[0];
$methodName = $router[1];

include("../src/controller/$className.php");

$controller = new $className();

$controller->$methodName();

