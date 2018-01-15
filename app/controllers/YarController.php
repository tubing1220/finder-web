<?php
namespace App\Controller;

use \Slim\App;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
class YarController{


    protected $app;
    protected $request;
    protected $response;

    function __construct(App $app,Request $request,Response $response) {
        $this->app      = $app;
        $this->request  = $request;
        $this->response = $response;
    }
    /**
     * the doc info will be generated automatically into service info page.
     * @params
     * @return
     */
    public function api($parameter, $option = "foo") {
        echo  "=====hello,tubing,zehong,junfei,zhengyi,visit successfully=====";
    }

    protected function client_can_not_see() {
    }



}


