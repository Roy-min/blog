<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/22 0022
 * Time: 21:35
 */
namespace app\admin\controller;

use think\Config;
use think\Controller;
use think\Image;
use think\Request;



class Upload extends Controller
{
    /*
     * 上传文章图片缩略图
     */
    public function artUpload(Request $request)
    {
        $validate=Config::get('image.VALIDATE');
        $path=Config::get('image.ARTPATH');
        $file=$request->file('file');
        $res=$file->validate($validate)->move($path);
        if ($res){
            $imgName=$res->getPathname();
            $image=Image::open($imgName);
            $image->thumb(250,150)->save($imgName);
        }
    }
}