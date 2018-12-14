<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/12/3
 * Time: 16:06
 */

namespace App\Modules\Admin\Model;

use HuangYi\Rbac\RbacTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class Room extends Model{
        public $table='room';
        public function roomAdd($data){
            return $this->insertGetId($data);
        }
        public function getAll(){
            return $this->get()
                ->toArray();
        }
        public function tow(){
            return $this
                ->leftJoin('class', 'room.class_id', '=', 'class.id')
                ->select('room.*','class.name')
                ->get()
                ->toArray();
        }
}