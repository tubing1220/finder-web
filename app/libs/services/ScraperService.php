<?php
namespace App\Lib\Service;


use GuzzleHttp\Client;
class ScraperService extends BaseService {



    public function getCategoryDetail($request_param,$page,$limit){

        if($page==1)
        {
            $before='';}
        else{
            $before='';
        }

        $url = $this->app->getContainer()->settings['trueScraperWebsite'].'&before='.$before.'&limit='.$limit .'&category='.$request_param['true_category_id'];

        $data = array();

        $client = new Client();
        $res = $client->request('GET', $url);
        $getBody = $res->getBody();
        $getContent = json_decode($getBody,true);
        if($getContent['s']==1 && $getContent['m']=='ok' ){

            if($getContent['d']['total']==0){
                return 1;
            }
            else{

            foreach($getContent['d']['entrylist'] as $k => $v){
                //['id'=>'','name'=>'','headerUrl'=>'','classifyName'=>'','title'=>'','desc'=>'','createtime'=>''],
                $data_e['id']=$v['objectId'];
                $data_e['name']=$v['user']['username'];
                $data_e['headerUrl']=$v['user']['avatarLarge'];
                $data_e['originalUrl']=$v['originalUrl'];
                $data_e['classifyName']=$request_param['name'];
                $data_e['title']=$v['title'];
                $data_e['desc']=$v['content'];
                $data_e['createtime']=intval($v['buildTime']);
                $data[] = $data_e;
            }
            return $data;

            }

        }
        else{
            return false;
        }



    }


}