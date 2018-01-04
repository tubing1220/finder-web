<?php
namespace App\Lib\Model;

use \Slim\App;
class BaseModel {

    function __construct(App $app) {
        $this->app      = $app;
    }

}