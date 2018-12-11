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
class Adverts extends Model{
    public function getShow(){
        return DB::select("select * from adverts where is_status='1'");
    }
}