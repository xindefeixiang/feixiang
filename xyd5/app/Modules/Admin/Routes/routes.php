<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'App\\Modules\Admin\Http\Controllers'], function()
{

    Route::get('index','MainController@index'); // 首页(中间)
    Route::get('main','MainController@main'); // 首页(顶部)
    Route::get('nav','MainController@nav'); // 首页(左侧)
    Route::get('table','MainController@table'); // 表格
    Route::get('form','MainController@form'); // 表单



/*
 * 登录
 * */
    Route::get('/', 'AdminController@index');                                  // 登录页展示
    Route::post('login','AdminController@login');           // 所有登录
  //  Route::post('teacher_login','AdminController@teacher_login');           // 导师登录
   // Route::post('institution_login','AdminController@institution_login');  // 机构登录
    Route::get('captcha/{tmp}','Code\CodeController@captcha'); // 验证码


    Route::get('list','TypeController@List'); // 列表
    Route::get('del','TypeController@Del'); // 列表
    Route::get('addView','TypeController@addView'); // 添加分类
    Route::post('SortAdd','TypeController@SortAdd');


    /*
     * 权限
     * */
    Route::get('permissionlist','PermissionController@permissionlist')->middleware('rbac');
    Route::get('permissionadd','PermissionController@permissionadd'); // 创建权限页面
    Route::post('permissionadddata','PermissionController@permissionadddata');
    Route::post('createPermissionExec','PermissionController@createPermissionExec');
    Route::get('userlist','UserController@userlist');
    Route::get('useradd','UserController@useradd');
    Route::get('userupdate','UserController@userupdate');
    Route::post('userupdatedata','UserController@userupdatedata');
    Route::post('useradddata','PermissionController@useradddata');
    Route::get('rolelist','RoleController@rolelist');
    Route::get('roleupdate','RoleController@roleupdate');
    Route::post('roleupdatedata','RoleController@roleupdatedata');

    /*导航管理*/
    Route::get('navlist','NavController@navlist');
	 //课程管理
    Route::get('class-list','ClassController@list');
    Route::any('class-add','ClassController@add');
    Route::get('class-type-son','ClassController@type_son');
	
    //课程章节
    Route::any('section-add','SectionController@add');
    Route::any('section-list','SectionController@list');
    Route::post('section-file','SectionController@upload');
	
	
    //跳转样式
    Route::resource('/prompt','PromptController');


    Route::get('information','MainController@information'); //编写个人信息
    Route::post('addd','MainController@add');//个人信息添加
    Route::any('upl','MainController@upl');//个人信息修改
    Route::any('upload','MainController@informationupl');//个人信息的修改
    Route::get('informationshow','MainController@informationshow'); //编写个人信息
    Route::any('log','MainController@log');
	
	//机构管理
    Route::get('arganceshi','ArganController@ArganCeshi'); //添加页面
    Route::get('arganmove','ArganController@ArganMove'); //联动
    Route::any('arganin','ArganController@ArganIn'); //添加数据
    Route::get('arganshow','ArganController@ArganShow'); //展示
    Route::get('arganup','ArganController@ArganUp'); //修改
    Route::any('arganupdate','ArganController@ArganUpdate'); //修改数据
    Route::get('argandel','ArganController@ArganDel'); //删除


    //讲师管理
    Route::get('teacheradd','TeacherController@TeacherAdd');
    Route::any('teacherin','TeacherController@TeacherIn');
    Route::get('teachershow','TeacherController@TeacherShow');
    Route::get('teacherup','TeacherController@TeacherUp');
    Route::any('teacherupdate','TeacherController@TeacherUpdate');
    Route::get('teacherdel','TeacherController@TeacherDel');


    //学生管理
    Route::get('studentadd','StudentController@StudentAdd');
    Route::any('studentin','StudentController@StudentIn');
    Route::get('studentshow','StudentController@StudentShow');
    Route::get('studentup','StudentController@StudentUp');
    Route::any('studentupdate','StudentController@StudentUpdate');
    Route::get('studentdel','StudentController@StudentDel');
	//广告管理
    Route::get('advertsadd','AdvertsController@AdvertsAdd');
    Route::any('advertsin','AdvertsController@AdvertsIn');
    Route::get('advertsshow','AdvertsController@AdvertsShow');
    Route::get('advertsup','AdvertsController@AdvertsUp');
    Route::any('advertsupdate','AdvertsController@AdvertsUpdate');
    Route::get('advertsdel','AdvertsController@AdvertsDel');
    //线下课程管理
    Route::get('sclassadd','SclassController@SclassAdd');
    Route::any('sclassin','SclassController@SclassIn');
    Route::get('sclassshow','SclassController@SclassShow');
    Route::get('sclassup','SclassController@SclassUp');
    Route::any('sclassupdate','SclassController@SclassUpdate');
    Route::get('sclassdel','SclassController@SclassDel');
    Route::any('Paperadd','PaperController@Paperadd');//试卷添加
    Route::any('Paperlist','PaperController@Paperlist');//试卷列表

    Route::any('roomAdd','RoomController@roomAdd');//班级添加
    Route::any('roomList','RoomController@roomList');//班级列表



    Route::any('Cut','CutController@index');//分班管理
    Route::any('Cutdo','CutController@cutdo');//分班
});
