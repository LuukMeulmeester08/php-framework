<?php
require __DIR__ . '/../vendor/autoload.php';

use framework\Request;
use framework\Response;
use framework\Kernel;

$request = new Request(
    $_SERVER['REQUEST_METHOD'],
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
    $_GET,
    $_POST
);

$kernel = new Kernel();
$response = $kernel->handle($request);
$response->echo();