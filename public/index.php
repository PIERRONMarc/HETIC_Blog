<?php
require_once('../config/autoload.php');

use Service\Router\Router;


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include('../config/autoload.php');

$router = new Router($_SERVER['REQUEST_URI']); 
include('../config/routes.php');
$router->run();