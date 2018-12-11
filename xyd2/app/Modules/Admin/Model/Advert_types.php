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
class Advert_types extends Model{
    public $table = 'advert_types';
    public function advert_types(){
        $data = $this->all(['id','name'])->toArray();
        return $data;
    }
}