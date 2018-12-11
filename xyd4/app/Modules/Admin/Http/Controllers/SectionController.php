<?php
/**
 * Created by PhpStorm.
 * User: Binz丶Gao
 * Date: 2018/12/6
 * Time: 16:26
 */

namespace App\Modules\Admin\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class SectionController extends Controller
{
    static $filename;//原始文件名
    static $file;
    static $tmp_name;//临时文件夹文件名
    static $blob_num;//文件切片的编号
    static $total_blob_num;//切片总数量
    static $uploadDir;//目标文件夹
    static $slice_filename;//切片文件的文件名
    public function add(Request $request){
        if ($request->isMethod('get')){
            $id = $request->get('id');
            return view('admin::section.add',['id'=>$id]);
        }
    }
    public function upload(Request $request){
        if ($request->has('file')){
            self::$file = $request->file('file');
            self::$filename = $request->post('filename');//原始文件名
            self::$tmp_name = self::$file->getRealPath();//临时文件夹文件名
            self::$blob_num = $request->post('blob_num');//文件切片的编号
            self::$total_blob_num = $request->post('total_blob_num');//切片总数量
            self::$uploadDir = self::$filename;//目标文件夹
            self::$slice_filename = 'X:\web\uploads/'.self::$uploadDir.'/'.self::$filename.'_'.self::$blob_num;//切片文件的文件名
            //判断文件夹是否存在
            $path = 'X:\web\uploads/'.self::$uploadDir;
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
            //上传切片及合并
            $arr = $request->post();
            $this->blom($arr);
        }
    }
    //合并切片
    public function blom($arr){
        move_uploaded_file(self::$tmp_name,self::$slice_filename);
        if (self::$blob_num == self::$total_blob_num){
            $blob = "";
            for ($i=1;$i<=self::$total_blob_num;$i++){
                $blob=file_get_contents('X:\web\uploads/'.self::$uploadDir.'/'.self::$filename.'_'.$i);
                file_put_contents('X:\web\uploads/'.self::$uploadDir.'/'.self::$filename,$blob,FILE_APPEND);
                //这里使用追加是因为 超变量内存 不会进行合并
            }
            //删除切片
            for ($i=1;$i<=self::$total_blob_num;$i++){
                unlink('X:\web\uploads/'.self::$uploadDir.'/'.self::$filename.'_'.$i);
            }
            //上传到七牛云
//            $path = json_decode($this->Qiniu(),'true');
//            echo $path;
            // 取到磁盘实例
//            $disk = Storage::disk('local');

// 删除目录
//            $disk->deleteDirectory(self::$uploadDir);
            $res = $this->db_add($arr);
            if ($res != 1){
                echo '1002';
            }
        }
    }
    function db_add($arr){
        $data['class_id'] = $arr['class_id'];
        $data['name'] = $arr['name'];
        $data['number'] = $arr['number'];
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['documents_url'] = 'http://127.0.0.1/uploads/'.self::$uploadDir.'/'.$arr['filename'];
        $res = DB::transaction(function () use ($data,$arr) {
            $res1 = DB::table('section')->insert($data);
            $res2 = DB::table('class')->where('id',$arr['class_id'])->increment('num');
            if ($res1 || $res2){
                return '1';
            }else{
                return '2';
            }
        });
        return $res;
    }
    function Qiniu(){
        // 初始化
        $disk = Storage::disk('qiniu');
        // 重命名文件
        $fileName = self::$filename;
        // 上传到七牛
        $bool = $disk->put('video_'.$fileName,file_get_contents(public_path().'/uploads/'.self::$uploadDir.'/'.self::$filename));
        // 判断是否上传成功
        if ($bool) {
            $path = $disk->getDriver()->downloadUrl('video_' . $fileName);
            return json_encode($path);
        }else{
            return "";
        }
    }
    //章节显示
    public function list(Request $request){
        $id = $request->get('id');
        $data = DB::table('section')
            ->where('class_id',$id)
            ->orderby('number','asc')
            ->get();
        return view('admin::section.list',['data'=>$data]);
    }
}
