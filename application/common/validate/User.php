<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/26
 * Time: 10:09
 */
namespace  app\common\validate;

use think\Validate;

class User extends Validate
{
    protected  $rule=['captcha|验证码'=>'require|length:4|captcha|token'];
}