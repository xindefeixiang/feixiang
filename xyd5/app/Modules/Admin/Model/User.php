<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/12/3
 * Time: 16:06
 */

namespace App\Modules\Admin\Model;

use HuangYi\Rbac\RbacTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    use RbacTrait;
    // 学生登录
    public function student_login($data){

    }
}