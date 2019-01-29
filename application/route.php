<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('admin/login','admin/Login/index');
Route::any('admin/enter/','admin/Login/login',['method'=>'get|post']);
Route::get('admin/quit','admin/Login/quit');


Route::get('admin/index','admin/Index/index');
Route::get('admin/welcome','admin/Index/welcome');
Route::get('admin/captcha','admin/Login/captcha');

//文章管理 资源路由
Route::resource('admin/article','admin/Article');
//分类管理 资源路由
Route::resource('admin/grade','admin/Grade');
//图片管理
Route::resource('admin/picture','admin/Picture');
//系统管理
Route::resource('admin/system','admin/System');
