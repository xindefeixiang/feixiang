<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/12/3
 * Time: 9:41
 */

namespace App\Modules\Admin\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Model\Sort;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller{
    // 列表展示
    public function List(){
        $sort = new Sort();
        $sortList = $sort->getSortLevelList(); // 获取分类层级列表
        return view("admin::goods.list",['sortList'=>$sortList]);
    }
    // 删除
    public function Del(){
        $sort = new Sort();
        $id = Input::get('id');
        if(!empty($sort->exist($id))){
            echo '子分类存在，不能删除';
        }else{
            if(DB::table('sort')->where('cat_id',$id)->delete()){
                echo "删除成功";
            }
        }
    }
    // 分类添加
    public function addView(){
        $sort = new Sort();
        $sortList = $sort->dropDownList();
        return view('admin::goods.add',['sortList'=>$sortList]);
    }
}