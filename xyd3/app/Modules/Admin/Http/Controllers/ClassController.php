<?php
/**
 * Created by PhpStorm.
 * User: Binz丶Gao
 * Date: 2018/12/5
 * Time: 19:20
 */

namespace App\Modules\Admin\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Modules\Admin\Model\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Modules\Admin\Model\ClassModel;
class ClassController extends Controller
{
    public function list(){
        $data = DB::table('class')
            ->join('type','class.type_id','=','type.path')
            ->select('class.*','type.type_name','type.path')
            ->orderby('id','asc')
            ->paginate(7);
        return view('admin::class.list',['data'=>$data]);
    }
    public function type_son(Request $request){
        $id = $request->get('id');
        $data = DB::table('type')
            ->select()
            ->where('pid',$id)
            ->get()
            ->toJson();
        foreach ($data as $k => $v) {
            if (gettype($v) == 'array' || getType($v) == 'object') {
                $arr[$k] = (object)array_to_object($v);
            }
        }
        return $data;
    }
    public function add(Request $request){
        if ($request->isMethod('post')){
            if ($request->hasFile('img')){
                // 获取文件,file对应的是前端表单上传input的name
                $file = $request->file('img');
                $path = $this->Qiniu($file);
                if ($path != ""){
                    $path = json_decode($path,true);
                    $arr = $request->post();
                    unset($arr['_token']);
                    $arr['img'] = $path;
                    $arr['created_at'] = date("Y-m-d H:i:s");
                    $res = DB::table('class')->insert($arr);
                    if ($res){
                        return redirect('/admin/prompt')->with(['message'=>'添加成功','url' =>'/admin/class-list', 'jumpTime'=>1,'status'=>'success']);
                    }
                }
            }else{
                return '缺少参数';
            }
        }else{
            $data = Type::all()->where('pid',0);
            return view('admin::class.add',['data'=>$data]);
        }
    }
    function Qiniu($file){
        // 初始化
        $disk = Storage::disk('qiniu');
        // 重命名文件
        $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
        // 上传到七牛
        $bool = $disk->put('image_'.$fileName,file_get_contents($file->getRealPath()));
        // 判断是否上传成功
        if ($bool) {
            $path = $disk->getDriver()->downloadUrl('image_' . $fileName);
            return json_encode($path);
        }else{
            return "";
        }
    }
}