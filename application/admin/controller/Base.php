<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/26
 * Time: 11:37
 */

namespace app\admin\controller;


use think\Controller;
use think\Session;

class Base extends Controller
{
    public function _initialize()
    {
        if (!Session::get('username')){
            return $this->redirect('/admin/login');
        }

    }
}