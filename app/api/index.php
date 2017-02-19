<?php

header('Access-Control-Allow-Origin: *');

require __DIR__ . './../../vendor/autoload.php';

$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');

$app->get('/:route+', function ($args) {
 echo json_encode(array_values($args));
});

$app->run();
