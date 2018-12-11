<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/6
 * Time: 13:32
 */
namespace App\Modules\Admin\Model;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Admin\Model\Argan;
class Teacher extends Model
{
    public $table = 'teacher';
    public $timestamps = false;

    //查出所有的培训机构并展示在前台
    public function argan(){
        $argan = new Argan();
        $data = $argan->all(['id','name'])->toArray();
        return $data;
    }

    //添加讲师入库
    public function add($data){
        return $this->insertGetId($data);
    }

    //查询数据
    public function show(){
        return $this->paginate(2)->toArray();
    }

    //修改查询数据
    public function up($id){
        return $this->where('id',$id)->first()->toArray();
    }

    //修改数据库的值
    public function updata($id,$data){
        return $this->where('id',$id)->update($data);
    }

    //删除数据库
    public function del($id){
        return $this->where('id',$id)->delete();
    }
}