<?php
namespace App\Controller;


class AuthorController extends BaseController {


    /**
     * [Author page infomation]
     * @return [json] [作者信息主页]
     */
    public function authorInfo()
    {



        $params = $this->request->getQueryParams();
        $token  = $params['token'];

        $user_info['user'] = array('id'=>1,
                                'user_name'=>'岁月依旧',
                                'header_url'=>'https://avatars.githubusercontent.com/u/14818224?v=3',
                                'create_article_num'=>128,
                                'save_article_num'=>66,
                                'like_article_num'=>68,
                                'follow_author_num'=>122,
                                'fans_num'=>100,
                                'classify_follow_num'=>102,
                                'history_num'=>290,
                                'company_info'=>'小米',
                                'position'=>'Android开发工程师',
                                'introduce'=>'开朗活泼',
                                'blog_address'=>'zjf.csdn.com',
                                'create_time'=>1478653430,
                                'update_time'=>1478653430,
            );
        $result['code'] = 0;
        $result['msg'] = 'success';
        $result['data'] = $user_info;
        $this->response->getBody()->write(json_encode($result));

    }


}