<?php
namespace App\Lib\Service;


use App\Lib\Model\TestModel;

class TestService extends BaseService {



    public function test(){

        $test = new TestModel($this->app);

        return $test->test();


    }


}