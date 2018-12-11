<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'App\\Modules\Index\Http\Controllers'], function()
{
    //主页
    Route::get('index', 'IndexController@index');
    Route::get('notfind', 'IndexController@notfind');
    //公开课程
    Route::get('course_comment', 'CourseController@course_comment');
    Route::get('course_detail', 'CourseController@course_detail');
    Route::get('course_video', 'CourseController@course_video');
    Route::any('course_list', 'CourseController@course_list');


    //注册登录
    Route::any('login', 'LoginController@login');
    Route::get('register', 'LoginController@register');
    Route::get('forgetpwd', 'LoginController@forgetpwd');

    //个人中心
    Route::get('usercenter_info', 'UserController@usercenter_info');
    Route::get('usercenter_message', 'UserController@usercenter_message');
    Route::get('usercenter_mycourse', 'UserController@usercenter_mycourse');
    Route::get('usercenter_fav_course', 'UserController@usercenter_fav_course');
    Route::get('usercenter_fav_org', 'UserController@usercenter_fav_org');
    Route::get('usercenter_fav_teacher', 'UserController@usercenter_fav_teacher');

    //个人信息保存
    Route::any('save', 'UserController@save');
    Route::any('resetpwd', 'UserController@resetpwd');//修改密码
    Route::any('sendemail_code', 'UserController@sendemail_code');//修改邮箱
    Route::any('update_email', 'UserController@update_email');//修改邮箱
    
    //教师中心
    Route::any('teachers_list', 'TeacherController@teachers_list');
    Route::get('teacher_detail', 'TeacherController@teacher_detail');
    //机构
    Route::any('org_list', 'OrgController@org_list');
    Route::get('org_detail_course', 'OrgController@org_detail_course');
    Route::get('org_detail_desc', 'OrgController@org_detail_desc');
    Route::get('org_detail_homepage', 'OrgController@org_detail_homepage');
    Route::get('org_detail_teachers', 'OrgController@org_detail_teachers');
    //搜素
    Route::post('search','SearchController@search');

});

