<?php

namespace App\Modules\Admin\Entities\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [];
    public $timestamps = false;
    protected $table = 'teacher';
    /*
     * 获取所有信息
     * */
    public function teacherdata(){
        return self::all()->toArray();
    }
}
