<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2019/1/26
 * Time: 22:15
 */
namespace app\admin\model;


use think\Model;

class Gradem extends Model
{
    protected $table='blog_cat';
    /**
     * 添加分类
     */
    public function addCat($cat_name, $cat_desc)
    {
        $data = ['cat_name' => $cat_name, 'cat_desc' => $cat_desc];
        if ($this->save($data)) {
            $res = ['code' => 10000, 'msg' => '添加成功'];
        } else {
            $res = ['code' => 10001, 'msg' => '添加失败'];
        }
        return $res;
    }

    //获取分类信息
    public function getAllData(){
        return $this->select()->toArray();
    }

    //获取单条分类信息
    public function getOneData($id){
        return $this->find($id)->toArray();
    }
}