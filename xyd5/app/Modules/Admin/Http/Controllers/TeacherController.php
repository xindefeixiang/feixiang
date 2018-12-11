<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/6
 * Time: 10:49
 */
namespace App\Modules\Admin\Http\Controllers;
use App\Modules\Admin\Model\Users;
use App\Modules\Admin\Model\Teacher;
use App\Modules\Admin\Model\Argan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class TeacherController extends Controller{
    //跳转到添加页面
    public function TeacherAdd(){
        $teacher = new Teacher();
        $data = $teacher->argan();
        return view('admin::teacher.add',['argan'=>$data]);
    }

    //处理数据，并用model层添加
    public function TeacherIn(Request $request){
        $teacher = new Teacher();
        $file = $_FILES['img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/teacher/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $data = [
            'user_id'=>1,
            'argan_id'=>$request->input('argan_id'),
            'name'=>$request->input('name'),
            'img'=>$savepath,
            'age'=>$request->input('age'),
            'year'=>$request->input('year'),
             'post'=>$request->input('post'),
             'company'=>$request->input('company'),
             'trait'=>$request->input('trait')
        ];
        $res = $teacher->add($data);
        if($res){
            return redirect('/admin/teachershow');
        }
    }

    //展示
    public function TeacherShow(){
        $teacher = new Teacher();
        $user = new Users();
        $argan = new Argan();
        $data = $teacher->show();
        foreach ($data['data'] as $k=>$v){
            $name = $user::where('id',"$v[user_id]")->first()->toArray();
            $argan_name = $argan::where('id',$v['argan_id'])->first()->toArray();
            $data['data'][$k]['user_name'] = $name['name'];
            $data['data'][$k]['argan_name'] = $argan_name['name'];
        }
        return view('admin::teacher.show',['data'=>$data]);
    }

    //根据id查数据并给他一个跳转展示修改页面
    public function TeacherUp(Request $request){
        $teacher = new Teacher();
        $argan = new Argan();
        $id = $request->get('id');
        $data = $teacher->up($id);
        $res = $teacher->argan();
        $argan_name = $argan::where('id',$data['argan_id'])->first()->toArray();
        $data['argan_name'] = $argan_name['name'];
        return view('admin::teacher.up',['data'=>$data,'argan'=>$res]);
    }

    //修改数据库
    public function TeacherUpdate(Request $request){
        $teacher = new Teacher();
        $file = $_FILES['img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/teacher/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $id = $request->input('id');
        $data = [
            'argan_id'=>$request->input('argan_id'),
            'name'=>$request->input('name'),
            'img'=>$savepath,
            'age'=>$request->input('age'),
            'year'=>$request->input('year'),
            'post'=>$request->input('post'),
            'company'=>$request->input('company'),
            'trait'=>$request->input('trait')
        ];
        $aaa = $teacher->updata($id,$data);
        if($aaa){
            return redirect('/admin/teachershow');
        }
    }

    //删除
    public function TeacherDel(Request $request){
        $id = $request->get('id');
        $teacher = new Teacher();
        $teacher->del($id);
    }
}