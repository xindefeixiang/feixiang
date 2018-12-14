<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Modules\Admin\Model\User;
use App\Modules\Admin\Model\Paper;
use App\Modules\Admin\Model\Teacher;
class PaperController extends Controller
{
    public function Paperadd(request $request)
    {
        if (!$request->isMethod('post')) {
            // 要执行的代码
            $teacher = new Teacher();
            $teacher = $teacher->getAll();
//            $teacher_id = [];
//            foreach ($teacher as $v) {
//                $teacher_id[] = $v['id'];
//            }
            return view('admin::paper.paperadd', ['teacher_id' => $teacher]);
        } else {
            $paper = new Paper();
            $data = [
                'paper_name'=>$request->input('paper_name'),
                'teacher_id'=>$request->input('teacher_id'),
                'status'=>$request->input('status'),
                'add_time'=>strtotime($request->input('add_time')),
                ];
                if($paper->paperAdd($data)){
                   return redirect('admin/Paperlist');
                }else{
                    echo 'Error';die;
                }
        }

    }

    public function Paperlist(){
        $paper = new Paper();
        $papers = $paper->tow();
//            var_dump($papers);die;
        return view('admin::paper.paperlist', ['papers' => $papers]);
    }
}