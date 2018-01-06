<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


//loader
//instantiate
$loader = new \Aura\Autoload\Loader;
$loader->addPrefix('App\Controller', __DIR__ . '/../app/controllers');
$loader->addPrefix('App\Lib\Model', __DIR__ . '/../app/libs/models');
$loader->addPrefix('App\Lib\Service', __DIR__ . '/../app/libs/services');
$loader->register();
/** example
*/
/*
$loader->addPrefix('Foo\Bar', '/path/to/foo-bar/src');
$loader->addPrefix('Foo\Bar', '/path/to/foo-bar/tests');
$loader->setPrefixes(array(
    'Foo\Bar' => array(
        '/path/to/foo-bar/src',
        '/path/to/foo-bar/tests',
    ),

    'Baz\Dib' => array(
        '/path/to/baz.dib/src',
        '/path/to/baz.dib/tests',
    ),
));
$loader->setClassFile('Foo\Bar\Baz', '/path/to/Foo/Bar/Baz.php');
$loader->setClassFiles(array(
    'Foo\Bar\Baz'  => '/path/to/Foo/Bar/Baz.php',
    'Foo\Bar\Qux'  => '/path/to/Foo/Bar/Qux.php',
    'Foo\Bar\Quux' => '/path/to/Foo/Bar/Quux.php',
));
// append to the SPL autoloader stack; use register(true) to prepend instead
$loader->register();

// this will fail
$baz = new \Foo\Bar\Baz;
// examine the debug information
var_dump($loader->getDebug());
 */

//加载config.php
$config = require __DIR__ . '/../config/config.php';


//定义全局变量
global $_application;


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
$container['db'] = function ($c) use ($config) {
    $db = $config['db'];
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'].';port=' . $db['port'],
        $db['username'], $db['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

//添加view
$container['view'] = new \Slim\Views\PhpRenderer('../app/views/');

//全局变量
$_application = $app;

//add routes
//$app->get('/{class}/{method}', function(Request $request, Response $response) use ($app) {
$app->get('/', function(Request $request, Response $response) use ($app) {
    $params = $request->getQueryParams();
    $class =$params['access'];
    $method=$params['method'];
    $resource = \App\Controller\BaseController::load($app,$request,$response,$class);
    if ($resource === null) {
        $response->getBody()->write('Class' . $class . ' not found');
    } else {
        $resource->$method();
    }


});


/*
$app->get('/', function (Request $request, Response $response, array $args) use ($app) {
    //$params = $request->getQueryParams();
    //$name = $args['name'];
    $response->getBody()->write("Hello, world");
    return $response;
});

$app->post('/', function (Request $request, Response $response, array $args) use ($app) {
    $data = $request->getParsedBody();

});
*/



return $app;

