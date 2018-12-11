<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function usercenter_info()
    {
        $id=1;

        $data=DB::table('index_user')->where('id',"$id")->first();
        // var_dump($data);die;
        return view('index::user.usercenter_info',['data'=>$data]);
    }
    //保存个人信息
    public function save(){
        $id=$_POST['id'];
        $nick_name=$_POST['nick_name'];
        $birday=$_POST['birday'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $arr=array('id'=>$id,'nick'=>$nick_name,'birthday'=>$birday,'sex'=>$gender,'address'=>$address,'phonenumber'=>$mobile,'email'=>$email);
        $res=DB::table('index_user')->where('id',$id)->update($arr);
            // return redirect('index/usercenter_info');
        echo ("<script>alert('修改成功！');location='usercenter_info'</script>");
    }
    public function resetpwd(){
        $id=$_POST['id'];
        $password=$_POST['password1'];
        $password2=$_POST['password2'];
        // if($password!=$password2){
        //     echo ("<script>alert('两次密码不一致');location='usercenter_info'</script>");
        //     die;
        // }
        $arr=array('id'=>$id,'password'=>$password);
        $res=DB::table('index_user')->where('id',$id)->update($arr);
        $array=array('status'=>'success');
        return $array;
        // echo ("<script>alert('修改成功！');location='login'</script>");
    }
    public function sendemail_code(Request $request){
        $message=mt_rand('111111','999999');
        $to=$_GET['email'];
        $request->session()->put('code', $message);
        // return $_GET['email'];
        // $message = '阿UI上课短还是';
        // $to = '1225119418@qq.com';
        $subject = '邮件发送';
        $flag=Mail::send(
            'index::user.send',
            ['content' => $message],
            function ($message) use($to, $subject) {
                $message->to($to)->subject($subject);
            }
        );
        $array=array('status'=>'success');
        return $array;
    }
    public function update_email(Request $request){
        $code2=$request->session()->get('code');
        $data=$_POST;
        $email=$data['email'];
        $code=$data['code'];
        $id=$data['id'];
        if($code!=$code2){
            $array=array('status'=>'e');
            return $array;
        }
        $arr=array('id'=>$id,'email'=>$email);
        $res=DB::table('index_user')->where('id',$id)->update($arr);
        if($res){
            $array=array('status'=>'success');
            return $array;
        }else{
             $array=array('status'=>'e');
             return $array;
        } 
    }

    public function usercenter_message(){
        return view('index::user.usercenter_message');
    }
    public function usercenter_mycourse(){
        return view('index::user.usercenter_mycourse');
    }
    public function usercenter_fav_course(){
        return view('index::user.usercenter_fav_course');
    }
    public function usercenter_fav_org(){
        return view('index::user.usercenter_fav_org');
    }
    public function usercenter_fav_teacher(){
        return view('index::user.usercenter_fav_teacher');
    }

}
