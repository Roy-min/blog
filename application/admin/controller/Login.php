<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/19 0019
 * Time: 17:02
 */

namespace app\admin\controller;

use think\captcha\Captcha;
use think\Controller;
use think\Config;
use think\Request;
use app\admin\model\Admin;
use think\Session;

class Login extends Controller
{
    /**
     * @return 显示登录页面
     */
    public function index()
    {
        return $this->fetch('login');
    }

    /**
     * @return 验证码图片
     */
    public function captcha(){
        $config =Config::get('captcha');
        $captcha = new Captcha($config);
        return $captcha->entry();
    }

    /**
     * 登录验证
     */
    public function login(Request $request){
        //使用验证规则
        $validate = validate('User');
        $check=$request->only(['captcha','__token__']);
        //验证码错误 返回错误码
        if (!$validate->check($check)) return $this->error($validate->getError(),'/admin/login');

        $username=$request->param('username','trim');
        $password=$request->param('password','trim');
        //引用模型层
        $admin =new Admin;
        $res=$admin->checkLogin($username,$password);
        //10001失败 10000成功
        if ($res['code']==10001) return $this->error($res['msg'],'/admin/login');

        if ($res['code']==10000) Session::set('username',$username);
        return $this->success($res['msg'],'/admin/index');
    }

    public function quit(){
        Session::delete('username');
        return $this->redirect('/admin/login');
    }
}