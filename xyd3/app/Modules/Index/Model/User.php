<?php
/**
 * Created by PhpStorm.
 * User: 两个E
 * Date: 2018/12/5
 * Time: 18:22
 */
namespace App\Modules\Index\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model{
    public function getOne($username,$password){
        return DB::select('select * from index_user');
    }
    public function getEmail($email){
        return DB::select("select * from index_user where email='$email'");
    }
}