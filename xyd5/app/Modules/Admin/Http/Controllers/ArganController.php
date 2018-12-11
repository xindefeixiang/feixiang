<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/4
 * Time: 10:26
 */
namespace App\Modules\Admin\Http\Controllers;
use App\Modules\Admin\Model\Argan;
use App\Modules\Admin\Model\City;
use App\Modules\Admin\Model\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ArganController extends Controller{
    //跳转到添加页面
    public function ArganCeshi(){
        $city = new City();
        $data = $city::all()->where('parent_id',0)->toArray();
        return view('admin::argan.ceshi',['city'=>$data]);
    }

    //无限极联动
    public function ArganMove(Request $request){
        $id = $request->get('id');
//        $id = $_GET['id'];
        $argan = new Argan();
        $res = $argan->move($id);
        $res = json_encode($res);
        return $res;
    }

    //添加机构
    public function ArganIn(){
        $argan = new Argan();
        $city = new City();
        $data = $_POST;
        $file = $_FILES['file'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/argan/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $city_name = '';
        foreach ($data['city_id'] as $k=>$v){
            $name = $city::where('id',"$v")->first()->toArray();
            $city_name.=$name['name'].'&nbsp';
        }
//        $userid = Admin::user()->id;
        $argan->user_id = 2;
        $argan->name = $data['name'];
        $argan->logo = $savepath;
        $argan->province = $city_name;
        $argan->address = $data['address'];
        $argan->url = $data['url'];
        $argan->desc = $data['desc'];
        $aaa = $argan->save();
        if($aaa){
            return redirect('/admin/arganshow');
        }
    }

    //跳转到展示页面
    public function ArganShow(){
        $argan = new Argan();
        $user = new Users();
        $data = $argan::paginate(2)->toArray();
        foreach ($data['data'] as $k=>$v){
            $name = $user::where('id',"$v[user_id]")->first()->toArray();
            $data['data'][$k]['user_name'] = $name['name'];
        }

        return view('admin::argan.show',['data'=>$data]);
    }

    //跳转到修改页面
    public function ArganUp(Request $request){
        $argan = new Argan();
        $city = new City();
        $city_name = $city::all()->where('parent_id',0)->toArray();
        $id = $request->get('id');
        $data = $argan::where('id',$id)->first()->toArray();
        return view('admin::argan.up',['data'=>$data,'city'=>$city_name]);
    }

    //修改数据库
    public function ArganUpdate(Request $request){
        $argan = new Argan();
        $city = new City();
        $data = $request->post();
        $file = $_FILES['file'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/argan/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $city_name = '';
        foreach ($data['city_id'] as $k=>$v){
            $name = $city::where('id',"$v")->first()->toArray();
            $city_name.=$name['name'].'&nbsp';
        }
        $aaa = $argan::where('id',$data['id'])->update(['name'=>$data['name'],'logo'=>$savepath,'province'=>$city_name,'address'=>$data['address'],'url'=>$data['url'],'desc'=>$data['desc']]);
        if($aaa){
            return redirect('/admin/arganshow');
        }
    }

    //删除机构数据库
    public function ArganDel(Request $request){
        $argan = new Argan();
        $id = $request->get('id');
        $aaa = $argan::where('id',$id)->delete();
        if($aaa){
            return redirect('/admin/arganshow');
        }
    }
}