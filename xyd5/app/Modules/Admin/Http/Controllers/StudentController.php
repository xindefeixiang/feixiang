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
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;

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
            $a = $argan::where('id',$v['argan_id'])->first();
            $b = $class::where('id',$v['class_id'])->first();
            $c = $user::where('id',$v['user_id'])->first();
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
    public function execel(){
        return view('admin::student.execel');
    }
    public function import(Request $request){
        if(!$request->hasFile('file')){
            exit('上传文件为空！');
         }
            $file=$_FILES;
            $excel_file_path=$file['file']['tmp_name'];
            $res =[];
            Excel::load($excel_file_path,function($reader)use(&$res){
            $reader=$reader->getSheet(0);
            $res=$reader->toArray();
            //print_r($res);die;
            });
            for($i=1;$i<count($res);$i++){
            $check=Student::where('student_name',$res[$i][3])->count();
            if($check){
            continue;
            }
            $stu=new Student();
            $stu->user_id=$res[$i][0];
            $stu->argan_id=$res[$i][1];
            $stu->class_id=$res[$i][2];
            $stu->student_name=$res[$i][3];
            $stu->student_sex=$res[$i][4];
            $stu->student_age=$res[$i][5];
            $stu->student_img=$res[$i][6];
            $stu->room_id=$res[$i][7];
            $stu->save();
            }
             return redirect::to('/admin/studentshow')->withSuccess("导入成功");
            }
}