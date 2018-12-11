<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('add', 'ZsgcController@add');          // 添加页面展示
Route::post('execAdd','ZsgcController@execAdd'); // 执行添加
Route::get('delete', 'ZsgcController@delete');   // 删除
Route::get('upShow','ZsgcController@upShow');    // 修改页面展示
Route::post('update','ZsgcController@update');    // 执行修改
Route::get('select', 'ZsgcController@select');   // 查找


Route::get('createPermission', 'RbacController@createPermission');   // 创建权限
Route::get('deletePermission', 'RbacController@deletePermission');   // 删除权限
Route::get('updatePermission', 'RbacController@updatePermission');   // 更新权限
Route::get('findPermission', 'RbacController@findPermission');        // 查询权限


Route::get('createRole', 'RbacController@createRole');   // 创建角色
Route::get('deleteRole', 'RbacController@deleteRole');   // 删除角色
Route::get('updateRole', 'RbacController@updateRole');   // 修改角色
Route::get('findRole', 'RbacController@findRole');        // 查询角色

Route::get('roleAttachPermission', 'RbacController@roleAttachPermission'); // 为角色赋权
Route::get('roleDetachPermission', 'RbacController@roleDetachPermission'); // 为角色解绑权限

Route::get('usersAttachRole','RbacController@userAttachRole');// 为用户绑定角色
Route::get('usersDetachRole','RbacController@usersDetachRole');// 为用户解绑角色

//Route::get('haoge','HaogeController@select'); // 豪哥控制器
//Route::post('haogeAdd','HaogeController@haogeAdd');

//Route::get('index','Main\MainController@index'); // 首页(中间)
//Route::get('main','Main\MainController@main'); // 首页(顶部)
//Route::get('nav','Main\MainController@nav'); // 首页(左侧)
//Route::get('table','Main\MainController@table'); // 表格
//Route::get('form','Main\MainController@form'); // 表单




//Route::get('login','Login\LoginController@index');                               // 登录页展示
//Route::post('student_login','Login\LoginController@student_login');           // 学生登录
//Route::post('teacher_login','Login\LoginController@teacher_login');           // 导师登录
//Route::post('institution_login','Login\LoginController@institution_login');  // 机构登录


//Route::get('captcha/{tmp}','Code\CodeController@captcha'); // 验证码


//Route::get('admin', '\Modules\Admin\Http\Controllers\AdminController@index');

