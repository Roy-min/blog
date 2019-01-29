<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/26
 * Time: 0:03
 */
namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;
class System extends Base
{
    public function index()
    {
        return $this->fetch('base');
    }

    /**
     * 显示日志页面
     */
    public function create()
    {
        return $this->fetch('log');
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
