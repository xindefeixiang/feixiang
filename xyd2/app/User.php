<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // 查询展示
    public function select(){
        $result = DB::select('select * from user');
        return $result;
    }
    // 添加
    public function execAdd($data){
        // 添加数据  返回bool值
        return DB::insert('insert into user(name,pwd) values(?,?)',[$data['name'],$data['pwd']]);
    }
}
