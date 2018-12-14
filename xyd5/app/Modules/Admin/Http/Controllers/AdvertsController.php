<?php
/**
 * Created by PhpStorm.
 * User: 王光宇
 * Date: 2018/12/6
 * Time: 10:49
 */
namespace App\Modules\Admin\Http\Controllers;
use App\Modules\Admin\Model\Adverts;
use App\Modules\Admin\Model\Advert_types;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class AdvertsController extends Controller{
    //跳转到添加页面
    public function AdvertsAdd(){
        $adverts = new Advert_types();
        $data = $adverts->advert_types();
        return view('admin::adverts.add',['adverts'=>$data]);
    }

    //处理数据，并用model层添加
    public function AdvertsIn(Request $request){
        $adverts = new Adverts();
        $file = $_FILES['image'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/adverts/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $data = [
            'id'=>1,
            'advert_type_id'=>$request->input('advert_type_id'),
            'adverts_desc'=>$request->input('adverts_desc'),
            'image'=>$savepath,
            'created_at'=>time(),
            'updated_at'=>time(),
            'is_status'=>1,
        ];
        $res = $adverts->add($data);
        if($res){
            return redirect('/admin/advertsshow');
        }
    }

    //展示
    public function AdvertsShow(){
        $adverts = new Adverts();
        $data = $adverts->show();
        return view('admin::adverts.show',['data'=>$data]);
    }

    //根据id查数据并给他一个跳转展示修改页面
    public function AdvertsUp(Request $request){
        $adverts = new Adverts();
        $advert_types = new Advert_types();
        $id = $request->get('id');
        $data = $adverts->up($id);
        $res = $advert_types->advert_types();
        $advert_type_name = $advert_types::where('id',$data['advert_type_id'])->first()->toArray();
        //print_r($data);die;
        $data['advert_type_name'] = $advert_type_name['advert_type_name'];
        return view('admin::adverts.up',['data'=>$data,'advert_type_name'=>$res]);
    }

    //修改数据库
    public function AdvertsUpdate(Request $request){
        $adverts = new Adverts();
        $file = $_FILES['image'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $savepath = 'images/adverts/'.$filename;
        move_uploaded_file($tmp_name,$savepath);
        $id = $request->input('id');
        $data = [
            'id'=>1,
            'advert_type_id'=>$request->input('advert_type_id'),
            'adverts_desc'=>$request->input('adverts_desc'),
            'image'=>$savepath,
            'updated_at'=>time(),
            'is_status'=>1,
        ];
        $aaa = $adverts->updata($id,$data);
        if($aaa){
            return redirect('/admin/advertsshow');
        }
    }

    //删除
    public function AdvertsDel(Request $request){
        $id = $request->get('id');
        $adverts = new Adverts();
        $adverts->del($id);
    }
}