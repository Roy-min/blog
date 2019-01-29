<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/26
 * Time: 21:59
 */
namespace app\common\validate;

use think\Validate;

class Cat extends Validate
{
    protected $rule=['cat_name|名称'=>'require|length:2,8|token','cat_desc|描述'=>'require|length:6,12'];
}