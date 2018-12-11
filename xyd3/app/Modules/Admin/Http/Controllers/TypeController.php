<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/12/3
 * Time: 9:41
 */

namespace App\Modules\Admin\Http\Controllers;
use App\Modules\Admin\Model\Type;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class TypeController extends Controller{
    // 课程分类列表展示
    public function List(){
        $sort = new Type();
        $sortList = $sort->getSortLevelList(); // 获取分类层级列表
        return view("admin::type.list",['sortList'=>$sortList]);
    }
    // 课程删除
    public function Del(){
        $sort = new Type();
        $id = Input::get('id');
        if(!empty($sort->exist($id))){
            echo '子分类存在，不能删除';
        }else{
            if(DB::table('sort')->where('cat_id',$id)->delete()){
                echo "删除成功";
            }
        }
    }
    // 课程分类添加
    public function addView(){
        $sort = new Type();
        $sortList = $sort->dropDownList();
        return view('admin::type.add',['sortList'=>$sortList]);
    }
    public function SortAdd(){
        $data = Input::all();
        var_dump($data);
    }
}