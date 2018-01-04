<?php
namespace App\Controller;

use \Slim\App;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class BaseController  {


    protected $app;
    protected $request;
    protected $response;

    function __construct(App $app,Request $request,Response $response) {
        $this->app      = $app;
        $this->request  = $request;
        $this->response = $response;
    }

    public static function load(App $app,Request $request,Response $response,$uri_class)
    {
        $class = __NAMESPACE__ . '\\' . ucfirst($uri_class).'Controller';
        if (!class_exists($class)) {
            return null;
        }

        return new $class($app,$request,$response);
    }

}