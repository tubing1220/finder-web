<?php
namespace App\Lib\Service;

use \Slim\App;
class BaseService {


    function __construct(App $app) {
        $this->app      = $app;
    }


}