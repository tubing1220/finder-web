<?php
namespace App\Controller;

use \App\Lib\Service\TestService;

class ShowController extends BaseController {

    /**
     * downloads页面
     */
    public function download(){

        /**
         * 以下是两种输出方式
         * （1）response (2) view
         */

        $output = '

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>程序羊——沉默的摇滚胜地</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body,html{
            height: 100%;
            background-color: #317ff7;
        }
        .header{
            height: 40px;
            line-height: 40px;
            background-color: #bacbea;
        }
        .main{
            width: 100%;
            background-color: #317ff7;
            color: #f7f7f7;
            height:  calc(100% - 40px);
        }
        .imgList{
            width: 100%;
            margin-top: 300px;
            display: flex;
        }
        .imgList .item{
            width: 50%;
            text-align: center;
        }
        .imgList .item img{
            width: 300px;
        }
        .text{
            height: 80px;
            font-size: 18px;
            line-height: 80px;
        }
        .frame{
            max-width: 1080px;
            min-width: 320px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="frame main">
        <div class="imgList">
            <div class="item">
                <img src="http://upload.ouliu.net/i/201801261056314pwu2.jpeg" alt="">
            </div>
            <div class="item">
                <img src="http://upload.ouliu.net/i/201801261111168o1wy.png" alt="">
                <div class="f7f7f7 text">
                    扫码下载程序羊 —— 照顾你的小情绪
                </div>
            </div>
        </div>
    </div>
</body>
</html>

        ';

        $this->response->getBody()->write($output);


    }




}