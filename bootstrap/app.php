<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


//加载config.php
$config = require '../config/config.php';

$app = new \Slim\App(['settings' => $config]);



//Add Dependencies
$container = $app->getContainer();

//添加日志
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $date = date('Y-m-d',time());
    $file_handler = new \Monolog\Handler\StreamHandler('/tmp/finder-web/'.$date.'/app.log');
    $logger->pushHandler($file_handler);
    return $logger;
};

//添加db
$container['db'] = function ($config) {
    $db = $config['db'];
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
        $db['username'], $db['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

//添加view
$container['view'] = new \Slim\Views\PhpRenderer('../app/views/');


//add routes
$app->get('/', function (Request $request, Response $response) {
    $params = $request->getQueryParams();
    $response->getBody()->write("Hello, world");

    return $response;
});






return $app;

