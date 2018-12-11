<?php
/**
 * Created by PhpStorm.
 * User: 雨思呗
 * Date: 2018/11/30
 * Time: 14:10
 */

namespace App\Modules\Admin\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller{
    // 首页(中间)
    public function index(){
        return view('admin::main.index');
    }
    // 首页(顶部)
    public function main(){
        return view('admin::main.main');
    }
    // 首页(左侧)
    public function nav(){
        return view('admin::main.nav');
    }
    // 表单
    public function form(){
        return view('admin::main.form');
    }
    // 表格
    public function table(){
        return view('admin::main.table');
    }
    public function information(){
//        $user = DB::table('userinfo')->first();
//        return view('admin::main.information',['user'=>$user]);
        return view('admin::main.information');
    }
    public function add(){
        $user_id = 1;
        $name = $_POST['nickname'];
        $file = $_FILES['img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = public_path().'/images/'.$filename;
        $add = 'images/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $time = $_POST['birthday'];
        $sex = $_POST['sex'];
        $a = $_POST['s_province'];
        $b = $_POST['s_city'];
        $c = $_POST['s_county'];
        $addr = "$a"."-"."$b". "-"."$c";
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $res = DB::table('userinfo')->insert(['user_id'=>$user_id,'nickname'=>$name,'img'=>$add,'birthday'=>$time,'sex'=>$sex,'addr'=>$addr,'tel'=>$tel,'email'=>$email]);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function informationshow(){
        $user_id = 1;
        $user =  DB::table('userinfo')->where(['user_id'=>$user_id])->first();
        $array =  json_decode( json_encode( $user),true);
        if(!$user){
            echo "请先添加个人信息";
            return view('admin::main.information');
        }else{
        return view('admin::main.informationshow',['user'=>$array]);
        }
    }
    public function upl(){
        $id = $_GET['id'];
        $user = DB::table('userinfo')->where('id',$id)->first();
        $array =  json_decode( json_encode( $user),true);
        return view('admin::main.informationupl',['user'=>$array]);
    }
    public function informationupl(){
        $id = $_POST['id'];
        $name = $_POST['nickname'];
        $file = $_FILES['img'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = public_path().'/images/'.$filename;
        $add = 'images/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $time = $_POST['birthday'];
        $sex = $_POST['sex'];
        $a = $_POST['s_province'];
        $b = $_POST['s_city'];
        $c = $_POST['s_county'];
        $addr = "$a"."-"."$b". "-"."$c";
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $arr = array('nickname'=>$name,'img'=>$add,'birthday'=>$time,'sex'=>$sex,'addr'=>$addr,'tel'=>$tel,'email'=>$email);
        $res = DB::table('userinfo')->where('id','=',$id)->update($arr);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function log(){
        $arr = DB::table('operation_logs')->get();
        return view('admin::main.log',['arr'=>$arr]);
    }
    public function a(){
        $arr = [1,5,8,10,9,4,3];
        $len = count($arr);
        for($i=0; $i<$len; $i++ ){
            for ($j=$len-1;$j>$i;$j--){
                if($arr[$j]<$arr[$j-1]){
                    $a = '';
                    $a = $arr[$j-1];
                    $arr[$j-1] = $arr[$j];
                    $arr[$j] = $a;
                }
            }
        }
        var_dump($arr);
    }
}