<?php

$config = array(

    'displayErrorDetails'   =>true,//turn this on in development mode to get information about errors
    'addContentLengthHeader'=>false,//allows the web server to set the Content-Length header which makes Slim behave more predictably

    'db'=>array(
        'dbname'    => 'finder_web',
        'host'      => '127.0.0.1',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'port'      => 5500,
    ),

    'redis' => array(
        'hostname' => '127.0.0.1',
        'port' => 16379,
        'timeout' => 3,
    ),



);

return $config;