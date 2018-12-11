<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/4
 * Time: 19:28
 */
namespace App\Modules\Admin\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Argan extends Model{
    public $table = 'argan';
    public $timestamps = false;
    //无限极联动
    public function move($id){
        return Db::select("select * from teach_city where parent_id=$id");
    }
    public function argan(){
        $data = $this->all(['id','name'])->toArray();
        return $data;
    }
}