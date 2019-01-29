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

class Article extends Base
{
    public function index()
    {
        return $this->fetch('article_list');
    }

    /**
     * 显示创建文章页面
     */
    public function create()
    {
        return $this->fetch('article_add');
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