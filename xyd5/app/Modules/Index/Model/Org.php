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
class Org extends Model{
    public function getSearch($search){
        return DB::select("select * from teach_argan where name like '%$search%'");
    }
    public function getAll(){
        return DB::select("select * from teach_argan");
    }
    public function getLimit(){
        return DB::select("select * from teach_argan limit 0,15");
    }
    public function getPage(){
        return DB::table('argan')->paginate(3);
    }
}