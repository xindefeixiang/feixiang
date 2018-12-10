<?php

namespace App\Modules\Admin\Entities\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    /*
     * 获取所有信息
     * */
    public function userlist(){
        return self::all(['id','name','email'])->toArray();
    }
}
