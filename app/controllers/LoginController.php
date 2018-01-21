<?php
namespace App\Controller;

use anerg\OAuth2\OAuth;
class LoginController extends BaseController {


    public function getWeiXinAuthorizeUrl()
    {

        $config = $this->app->getContainer()->settings['weixin'];
        $OAuth  = OAuth::getInstance($config, 'weixin');
        //$OAuth->setDisplay('mobile'); //此处为可选,若没有设置为mobile,则跳转的授权页面可能不适合手机浏览器访问
        //return redirect($OAuth->getAuthorizeURL());
        $redirect_url = $OAuth->getAuthorizeURL();
        header("Location: $redirect_url");

    }

    public function getWeiXinCallback()
    {
        $params = $this->request->getQueryParams();
        $config = $this->app->getContainer()->settings['weixin'];
        $OAuth    = OAuth::getInstance($config, $params['loginType']);
        //$OAuth->getAccessToken();
        /**
         * 在获取access_token的时候可以考虑忽略你传递的state参数
         * 此参数使用cookie保存并验证
         */
        $ignore_stat = true;
        $access_token = $OAuth->getAccessToken($ignore_stat);
        $sns_info = $OAuth->userinfo();
        /*
        {
            "subscribe": 1,
            "openid": "oLVPpjqs2BhvzwPj5A-vTYAX4GLc",
            "nickname": "刺猬宝宝",
            "sex": 1,
            "language": "zh_CN",
            "city": "深圳",
            "province": "广东",
            "country": "中国",
            "headimgurl": "http://wx.qlogo.cn/mmopen/JcDicrZBlREhnNXZRudod9PmibRkIs5K2f1tUQ7lFjC63pYHaXGxNDgMzjGDEuvzYZbFOqtUXaxSdoZG6iane5ko9H30krIbzGv/0",
            "subscribe_time": 1386160805
        }
        */
        //todo 将下面的存储到数据库，同时生成新的app token
        //token['access_token'] && $token['expires_in'] && $token['openid']
        /*
        $userinfo = array(
            'openid'  => $this->token['openid'],
            'unionid' => isset($this->token['unionid']) ? $this->token['unionid'] : '',
            'channel' => 'weixin',
            'nick'    => $rsp['nickname'],
            'gender'  => $this->getGender($rsp['sex']),
            'avatar'  => $rsp['headimgurl']
        );
        */



    }






}
