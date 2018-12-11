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
class Course extends Model{
    public function getSearch($search){
        return DB::select("select * from teach_class where name like '%$search%'");
    }
    public function getAll(){
        return DB::select("select * from teach_class");
    }
    public function getLimit(){
        return DB::select("select * from teach_class limit 0,6");
    }
    public function getPage(){
        return DB::table('class')->paginate(9);
    }
}