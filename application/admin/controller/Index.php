<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/19 0019
 * Time: 16:30
 */

namespace app\admin\controller;

use app\admin\controller\Base;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }
}