<?php

//线上环境的配置放在新浪云对应项目根目录下面

$config = array(

    'displayErrorDetails'   =>true,//turn this on in development mode to get information about errors
    'addContentLengthHeader'=>false,//allows the web server to set the Content-Length header which makes Slim behave more predictably

    //测试地址，线上使用需要修改为正式线上地址
    'db'=>array(
        'dbname'    => 'test',
        'host'      => '127.0.0.1',
        'username'  => 'tubing',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'port'      => 3306,
    ),

    //测试地址，线上使用需要修改为正式线上地址
    'redis' => array(
        'hostname' => '127.0.0.1',
        'port' => 16379,
        'timeout' => 3,
    ),

    //测试地址，线上使用需要修改为正式线上地址
    'weixin' => array(
        'app_key'    => 'xxxxxx',
        'app_secret' => 'xxxxxxxxxxxxxxxxxxxx',
        'scope'      => 'snsapi_login',
        'callback'   => [
            'default' => 'dev.finder-web.com/index.php?access=login&submit=getWeiXinCallback',
            'mobile'  => 'dev.h5.finder-web.com/index.php?access=login&submit=getWeiXinCallback',
        ]
    ),


    //测试地址，线上使用需要修改为正式线上地址
    'yar_test'=>'http://dev.finder-web.com/yar',


    //测试环境和线上环境地址相同
    "scraperWebsite"      =>'https://juejin.im',
    'trueScraperWebsite'  =>'https://timeline-merger-ms.juejin.im/v1/get_entry_by_rank?src=web',
    'categoryList' => [['id'=>'10000','name'=>'前端','link'=>'/welcome/frontend','true_category_id'=>'5562b415e4b00c57d9b94ac8'],
        ['id'=>'10001','name'=>'Android','link'=>'/welcome/android','true_category_id'=>'5562b410e4b00c57d9b94a92'],
        ['id'=>'10002','name'=>'后端','link'=>'/welcome/backend','true_category_id'=>'5562b419e4b00c57d9b94ae2'],
        ['id'=>'10003','name'=>'人工智能','link'=>'/welcome/ai','true_category_id'=>'57be7c18128fe1005fa902de'],
        ['id'=>'10004','name'=>'iOS','link'=>'/welcome/ios','true_category_id'=>'5562b405e4b00c57d9b94a41'],
        ['id'=>'10005','name'=>'工具资源','link'=>'/welcome/freebie','true_category_id'=>'5562b422e4b00c57d9b94b53'],
        ['id'=>'10006','name'=>'阅读','link'=>'/welcome/article','true_category_id'=>'5562b428e4b00c57d9b94b9d']],


);

return $config;