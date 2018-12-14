<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/12
 * Time: 19:18
 */
namespace App\Modules\Admin\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Modules\Admin\Model\Type;
use App\Modules\Admin\Model\Teacher;
use App\Modules\Admin\Model\Sclass;
use App\Modules\Admin\Model\Argan;
class SclassController extends Controller{
    //跳转到添加页面
    public function SclassAdd(){
        $type = new Type();
        $teacher_model = new Teacher();
        $data = $type->getSortLevelList();
        $argan = $teacher_model->argan();
        $teacher = $teacher_model->teacher();
        return view('admin::sclass.add',['type'=>$data,'argan'=>$argan,'teacher'=>$teacher]);
    }

    //入库
    //获取到添加值并入库
    public function SclassIn(Request $request){
        $class = new Sclass();
        $file = $_FILES['img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/class/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $data = [
            'type_id'=>$request->input('type_id'),
            'argan_id'=>$request->input('argan_id'),
            'teacher_id'=>$request->input('teacher_id'),
            'name'=>$request->input('name'),
            'intro'=>$request->input('intro'),
            'img'=>$savepath,
            'num'=>$request->input('num'),
            'time'=>$request->input('time'),
            'sign'=>$request->input('sign'),
            'details'=>$request->input('details')
        ];
        $aaa = $class->add($data);
        if($aaa){
            return redirect('/admin/sclassshow');
        }
    }


    //展示页面
    public function SclassShow(){
        $type = new Type();
        $argan = new Argan();
        $class = new Sclass();
        $teacher = new Teacher();
        $data = $class->show();
        foreach($data['data'] as $k=>$v){
            $a = $argan::where('id',$v['argan_id'])->first();
            $b = $teacher::where('id',$v['teacher_id'])->first();
            $c = $type::where('id',$v['type_id'])->first();
            $data['data'][$k]['argan_name'] = $a['name'];
            $data['data'][$k]['teacher_name'] = $b['name'];
            $data['data'][$k]['type_name'] = $c['type_name'];
        }
        return view('admin::sclass.show',['data'=>$data]);
    }

    //跳转至修改页面
    public function SclassUp(Request $request){
            $type_model = new Type();
            $argan = new Argan();
            $class = new Sclass();
        $teacher_model = new Teacher();
            $id = $request->get('id');
            $data = $class->up($id);
            $argan_name = $argan::where('id',$data['argan_id'])->first()->toArray();
            $type_name = $type_model::where('id',$data['type_id'])->first()->toArray();
            $teacher_name = $teacher_model::where('id',$data['teacher_id'])->first()->toArray();
            $data['argan_name'] = $argan_name['name'];
            $data['type_name'] = $type_name['type_name'];
            $data['teacher_name'] = $teacher_name['name'];
        $type = $type_model->getSortLevelList();
        $argan = $teacher_model->argan();
        $teacher = $teacher_model->teacher();
            return view('admin::sclass.up',['data'=>$data,'argan'=>$argan,'teacher'=>$teacher,'type'=>$type]);

    }

    //修改数据库
    public function SclassUpdate(Request $request){
        $teacher = new Sclass();
        $file = $_FILES['img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/class/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $id = $request->input('id');
        $data = [
            'type_id'=>$request->input('type_id'),
            'argan_id'=>$request->input('argan_id'),
            'teacher_id'=>$request->input('teacher_id'),
            'name'=>$request->input('name'),
            'intro'=>$request->input('intro'),
            'img'=>$savepath,
            'num'=>$request->input('num'),
            'time'=>$request->input('time'),
            'sign'=>$request->input('sign'),
            'details'=>$request->input('details')
        ];
        $aaa = $teacher->updata($id,$data);
        if($aaa){
            return redirect('/admin/sclassshow');
        }
    }

    //删除
    public function SclassDel(Request $request){
        $id = $request->get('id');
        $class = new Sclass();
        $aaa = $class->del($id);
        if($aaa){
            return redirect('/admin/sclassshow');
        }
    }

}