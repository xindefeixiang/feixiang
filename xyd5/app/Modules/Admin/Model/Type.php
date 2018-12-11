<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/12/3
 * Time: 9:50
 */

namespace App\Modules\Admin\Model;
use Illuminate\Database\Eloquent\Model;

class Type extends Model{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'type';
}