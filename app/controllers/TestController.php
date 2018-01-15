<?php
namespace App\Controller;

use \App\Lib\Service\TestService;

class TestController extends BaseController {

    /**
     * 基础test用例
     */
    public function test(){


        //var_dump($this->app);
        //var_dump($this->request);
        //var_dump($this->response);
        /**
         * 获取get参数
         */
        $data = $this->request->getQueryParams();
        /**
         * 获取post参数
         */
        //$data = $this->request->getParsedBody();

        $output =  date('Y-m-d H:i:s',time()) .' Test is OK! ';

        /**
         * 调用model或者service
         */
        $testService = new TestService($this->app);

        $pdo = $testService->test();
        var_dump($pdo);

        /**
         * 打印日志  目录 tmp/finder-web
         */
        $this->app->getContainer()->logger->addInfo('getParsedBody is '.json_encode($data));

        /**
         * 以下是两种输出方式
         * （1）response (2) view
         */
        //$this->response->getBody()->write($output);

        $this->app->getContainer()->view->render($this->response, 'test.phtml', ['test' => $output]);

    }


    /**
     * 显示系统php信息
     */
    public function phpInfo(){

        echo phpinfo();

    }


    /**
     * 显示系统php信息(公司内部测试接口，内网可用)
     */
    public function yarClient(){

        $client = new \Yar_Client("dev.finder-web.com/yar");
        $result = $client->api(array());
        var_dump($result);

    }


}