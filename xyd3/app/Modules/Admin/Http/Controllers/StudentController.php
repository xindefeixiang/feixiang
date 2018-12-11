<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/6
 * Time: 18:10
 */
namespace App\Modules\Admin\Http\Controllers;
use App\Modules\Admin\Model\Teacher;
use App\Modules\Admin\Model\Sclass;
use App\Modules\Admin\Model\Student;
use App\Modules\Admin\Model\Argan;
use App\Modules\Admin\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class StudentController extends Controller{

    //跳转到添加页面
    public function StudentAdd(){
        $teacher = new Teacher();
        $sclass = new Sclass();
        $argan = $teacher->argan();
        $class = $sclass->class();
        return view('admin::student.add',['argan'=>$argan,'class'=>$class]);
    }

    //获取到添加值并入库
    public function StudentIn(Request $request){
        $student = new Student();
        $file = $_FILES['student_img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/student/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $data = [
            'user_id'=>1,
            'argan_id'=>$request->input('argan_id'),
            'class_id'=>$request->input('class_id'),
            'student_name'=>$request->input('student_name'),
            'student_sex'=>$request->input('student_sex'),
            'student_age'=>$request->input('student_age'),
            'student_img'=>$savepath
        ];
        $aaa = $student->add($data);
        if($aaa){
            return redirect('/admin/studentshow');
        }
    }

    //列表展示
    public function StudentShow(){
        $student = new Student();
        $argan = new Argan();
        $class = new Sclass();
        $user = new Users();
        $data = $student->show();
        foreach($data['data'] as $k=>$v){
            $a = $argan::where('id',$v['argan_id'])->first()->toArray();
            $b = $class::where('id',$v['class_id'])->first()->toArray();
            $c = $user::where('id',$v['user_id'])->first()->toArray();
            $data['data'][$k]['argan_name'] = $a['name'];
            $data['data'][$k]['class_name'] = $b['name'];
            $data['data'][$k]['user_name'] = $c['name'];
        }

        return view('admin::student.show',['data'=>$data]);

    }

    //跳转修改页面
    public function StudentUp(Request $request){
        $student = new Student();
        $argan = new Argan();
        $class = new Sclass();
        $id = $request->get('id');
        $data = $student->up($id);
        $argan_name = $argan::where('id',$data['argan_id'])->first()->toArray();
        $class_name = $class::where('id',$data['class_id'])->first()->toArray();
        $data['argan_name'] = $argan_name['name'];
        $data['class_name'] = $class_name['name'];
        $res_class = $class->class();
        $res_argan = $argan->argan();
        return view('admin::student.up',['data'=>$data,'class'=>$res_class,'argan'=>$res_argan]);
    }

    //修改数据库
    public function StudentUpdate(Request $request){
        $student = new Student();
        $file = $_FILES['student_img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/student/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $id = $request->input('id');
        $data = [
            'argan_id'=>$request->input('argan_id'),
            'class_id'=>$request->input('class_id'),
            'student_name'=>$request->input('student_name'),
            'student_sex'=>$request->input('student_sex'),
            'student_age'=>$request->input('student_age'),
            'student_img'=>$savepath
        ];
        $aaa = $student->updata($id,$data);
        if($aaa){
            return redirect('/admin/studentshow');
        }
    }

    //删除
    public function StudentDel(Request $request){
        $student = new Student();
        $id = $request->get('id');
        $aaa = $student->del($id);
        if($aaa){
            return redirect('/admin/studentshow');
        }
    }
}