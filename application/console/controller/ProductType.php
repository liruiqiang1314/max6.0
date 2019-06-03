<?php
namespace app\console\controller;
use think\Db;
use think\Request;
use think\Url;
use app\console\model\ProductType as ThisModel;
use app\console\model\Product as ProductModel;

class ProductType extends Base
{
    /**
     * [create description]添加方法
     * @return [type] [description]
     */
	public function create()
	{
		if (Request::instance()->isPOST())
		{
			$post_data = Request::instance()->post();
			$result = ThisModel::saveVerify($post_data);
			if (true === $result) {
                $this->success('新建成功', 'console/Product/index');
            } else {
                $this->error($result);
            }
		}
		$param = $this->appendarg();

		return $this->fetch('create', $param);
	}

    /**
     * [update description]更新方法
     * @param  [type] $id [description]主键id
     * @return [type]     [description]
     */
	public function update($id)
	{
		if (Request::instance()->isPOST())
		{
			$post_data = Request::instance()->post();
			$result = ThisModel::saveVerify($post_data,$id);
			if (true === $result) {
                $this->success('更新成功', 'console/Product/index');
            } else {
                $this->error($result);
            }
		}

		$data = ThisModel::get($id);
		$param = array_merge(['vo'=>$data], $this->appendarg());

		return $this->fetch('create', $param);
	}
    /**
     * 添加修改时候需要传递参数的话，用此方法，只写一遍
     */
	public function appendarg(){
		return [
		];
	}
    /**
     * [delete description]删除方法 多选和单选删除
     * @return [type] [description]
     */
	public function delete(){
		if (Request::instance()->isPOST())
		{
			$id = Request::instance()->post('id'); // (/a)方法 将收到的id转为数组
			$ishave = ProductModel::get(['type_id' => $id]);
			if($ishave){
				$this->error('该分类关联案例不能删除');
			}else{
				$delmodel = ThisModel::destroy($id);
				if($delmodel){
				    $this->success('删除成功', 'console/Product/index');
				}
				else{
					$this->error($delmodel->getError());
				}
		    }
	    }
	    else{
	    	$this->error('请求方式出错!');
	    }
	}
    /**
     * [renewfield description]列表更新字段
     * @return [type] [description]
     */
	public function renewfield(){
		if (Request::instance()->isPOST())
		{
            $data = Request::instance()->post();
			$validate = validate('ProductType');

			$post = Request::instance()->except(['id'],'post');
			$post = array_keys($post);

            $validate->scene('edit', $post);
			if(!$validate->scene('edit')->check($data)){
			    $this->error($validate->getError());
			}
	        $this_model = new ThisModel();
	        if($this_model->update($data))
            {
			    $this->success('更新成功', 'console/Product/index');
			}
			else{
				$this->error($this_model->getError());
			}
		}
	    else{
	    	$this->error('请求方式出错!');
	    }
	}
}
