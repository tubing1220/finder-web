<?php
namespace App\Controller;

use \App\Controller\BaseController;

class TestController extends BaseController {



    public function test(){

        echo  'Test is OK!' . date('Y-m-d H:i:s',time());

    }




}