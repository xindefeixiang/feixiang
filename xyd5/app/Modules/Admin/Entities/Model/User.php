<?php

namespace App\Modules\Admin\Entities\Model;

use HuangYi\Rbac\RbacTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use RbacTrait;
    use Notifiable;
    protected $fillable = [];
    public $timestamps = false;
    /*
     * 获取所有信息
     * */
    public function userlist(){
        return self::all(['id','name','email'])->toArray();
    }
//    public function userone(){
//        return self::
//    }
}
