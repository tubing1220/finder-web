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
		echo json_encode($result);
    }

    /**
	 * [categoryDetail description]
	 * @return [json] [文章详情列表接口]
	 */
    public function categoryDetail()
	{

    }


}