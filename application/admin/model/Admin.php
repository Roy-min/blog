<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/26
 * Time: 10:27
 */

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    public function checkLogin($username,$password){
        $admin=$this->where('username',$username)->find();
        if (empty($admin)) return ['code'=>10001,'msg'=>'用户名不存在'];
        $user =$admin ->toArray();
        $pwd=md5($password.$user['salt']);
        if ($pwd == $user['password']){
            $res= ['code' => 10000 ,'msg' => '登入成功'];
        }else{
            $res =['code' => 10001 ,'msg' => '密码错误'];
        }

        return $res;
    }
}
