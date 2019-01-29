<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/25
 * Time: 23:31
 */
namespace app\admin\controller;


use app\admin\controller\Base;
use think\Request;

class Picture extends Base
{
    public function index()
    {
        return $this->fetch('picture');
    }

    /**
     * 显示添加图片页面
     */
    public function create()
    {
        return $this->fetch('picture_add');
    }

    public function save(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function delete($id)
    {

    }
}