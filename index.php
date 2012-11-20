<?php
require_once 'Slim/Slim.php';

use \Slim\Slim;

Slim::registerAutoloader();

$app = new Slim();
$app->get('/', function () use ($app) {
    $app->render("index.php");
});
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->run();