<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/6
 * Time: 18:18
 */
namespace App\Modules\Admin\Model;
use Illuminate\Database\Eloquent\Model;
class Sclass extends Model{
    public $table = 'class';
    public $timestamps = false;
    public function class(){
        return $this->all(['id','name'])->toArray();
    }

    //添加入库
    public function add($data){
        return $this->insertGetId($data);
    }

    public function show(){
        return $this->paginate(2)->toArray();
    }

    //修改查询数据
    public function up($id){
        return $this->where('id',$id)->first()->toArray();
    }

    //修改数据库数据
    public function updata($id,$data){
        return $this->where('id',$id)->update($data);
    }

    //删除数据
    public function del($id){
        return $this->where('id',$id)->delete();
    }
    public function getAll(){
        return $this->select('name','id')->get()->toArray();
    }
}