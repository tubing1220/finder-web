<?php
namespace App\Controller;

class ArticleController extends BaseController {

	
	/**
	 * [categoryList description]
	 * @return [json] [文章分类列表接口]
	 */
    public function categoryList()
	{
		// 文章分类列表 
		$category_list['list'] = [['id'=>'10000','name'=>'前端'],['id'=>'10001','name'=>'Android'],['id'=>'10002','name'=>'后端'],['id'=>'10003','name'=>'人工智能'],['id'=>'10004','name'=>'iOS'],['id'=>'10005','name'=>'工具资源']];
		$result['code'] = 0;
		$result['msg'] = 'success';
		$result['data'] = $category_list;
        $this->response->getBody()->write(json_encode($result));
		//echo json_encode($result);
    }

    /**
	 * [categoryDetail description]
	 * @return [json] [文章详情列表接口]
	 */
    public function categoryDetail()
	{
        //['id'=>'','name'=>'','headerUrl'=>'','classifyName'=>'','title'=>'','desc'=>'','createtime'=>''],
        $category_detail_list['list'] = [['id'=>'1100','name'=>'骑摩托马斯','headerUrl'=>'https: //dn-mhke0kuv.qbox.me/4aca6eae6cb95ca86c1d.jpeg?imageView2/1/w/100/h/100/q/85/format/webp/interlace/1','classifyName'=>'Android','title'=>'如何获得微信小游戏跳一跳源码','desc'=>'昨天V2EX上的一篇通过抓包来获取微信跳一跳源码的文章走红，文章连接点击这里我也在通过文章中的方式进行了抓包，但是并未探测到小游戏的下载连接，可能微信对此已经进行了修复。而且上文中提供的下载连接也显示为404的状态码。虽然抓包未果，但是依然可以从本地将源码抽离出来，下面将介绍如何从Android手机里面找到微信下载的小游戏源码作者：骑摩托马斯链接：https: //juejin.im/post/5a4b0fc7f265da431956a2b7来源：掘金著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。','createtime'=>'1400786745'],
                                         ['id'=>'1101','name'=>'闰土大叔','headerUrl'=>'https: //dn-mhke0kuv.qbox.me/4aca6eae6cb95ca86c1d.jpeg?imageView2/1/w/100/h/100/q/85/format/webp/interlace/1','classifyName'=>'Android','title'=>'回望2017：一个前端从业者砥砺前行的一年','desc'=>'从年前就嚷嚷着要走出去走出去，转眼间已经到了年底依然在我的大太原呆着。年底了，不能免俗的我，也来写一篇2017年度工作总结的文章，凑凑热闹。如果对你有一点点启发，或者感悟，那我写这些文字也算值了。接下来，正文从这开始～','createtime'=>'1400786767'],
                                        ];
        $result['code'] = 0;
        $result['msg'] = 'success';
        $result['data'] = $category_detail_list;
        $this->response->getBody()->write(json_encode($result));





    }


}