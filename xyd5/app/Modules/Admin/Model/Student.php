<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/6
 * Time: 18:22
 */
namespace App\Modules\Admin\Model;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    //定义表名
    public $table = 'student';
    public $timestamps = false;
    //添加入库
    public function add($data){
        return $this->insertGetId($data);
    }

    //展示
    public function show(){
        return $this->paginate(2)->toArray();
    }

    //跳转到修改页面
    public function up($id){
        return $this->where('id',$id)->first()->toArray();
    }

    //修改数据库
    public function updata($id,$data){
        return $this->where('id',$id)->update($data);
    }

    //删除
    public function del($id){
        return $this->where('id',$id)->delete();
    }
}