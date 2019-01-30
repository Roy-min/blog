<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/19 0019
 * Time: 17:40
 */

namespace app\admin\controller;


use app\admin\controller\Base;
use think\Request;
use app\common\validate\Cat;
use app\admin\model\Gradem;

class Grade extends Base
{
    //分类管理 页面显示 及数据渲染
    public function index()
    {
        $grade=new Gradem;
        $res=$grade->getAllData();
        $this->assign('res',$res);
        return $this->fetch();
    }

    /**
     *
     */
    public function create()
    {

    }
    //添加分类
    public function save(Request $request)
    {
        $validate=validate('Cat');
        if (!$validate->check($request->param())){
            return $this->error($validate->getError(),'/admin/grade');
        }
        $cat_name =$request->param('cat_name','trim');
        $cat_desc =$request->param('cat_desc','trim');
        $grade=new Gradem;
        $res=$grade->addCat($cat_name,$cat_desc);
//        if ($res['code']==10001)
            return $this->error($res['msg'],'/admin/grade');
//        if ($res['code']==10000) return $this->error($res['msg'],'/admin/grade');
    }
    //编辑
    public function edit($id)
    {
        $grade=new Gradem;
        $res=$grade->getOneData($id);
    }

    public function update(Request $request,$id)
    {

    }

    public function delete($id)
    {

    }
}