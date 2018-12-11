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
}