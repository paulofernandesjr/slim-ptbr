<?php
require_once 'Slim/Slim.php';

use \Slim\Slim;

Slim::registerAutoloader();

$app = new Slim();

// forma de fazer o roteamento
$app->get('/', function () use ($app) {
    $parametros = array();
    $parametros['description'] = 'O Slim é um micro framework PHP que auxilia na construção de aplicações web ou APIs simples e poderosas de forma rápida.';
    $app->render("index.php");
});

$app->get('/docs', 'documentacao');
function documentacao(){
    $app = Slim::getInstance();
    $parametros = array();
    $parametros['title'] = "Documentação";
    $parametros['description'] = 'Documentação do Slim framework. Aqui você encontra tudo explicado para facilitar o seu aprendizado.';
    $app->render("documentacao-template.php", $parametros);
}


$app->run();