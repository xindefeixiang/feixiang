<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Modules\Admin\Model\User;
use Illuminate\Http\Request;
use App\Modules\Admin\Model\Student;
use App\Modules\Admin\Model\Room;
class CutController extends Controller{
//分班管理

    public function index(Request $request){
        if (!$request->isMethod('post')) {
            $student = new Student();
            $room = new Room();
            $room = $room->getAll();
            $data = [
                'student'=>$student->tow(),
                'room'=>$room
                ];
            return view('admin::cut.cut',['data'=>$data]);
        }else{
            echo 1;
        }
    }
    public function cutdo(){
        $student = new Student();
        $student_id = $_GET['student_id'];
        $room_id = $_GET['room_id'];
        $data = [
            'student_id'=>$student_id,
            'room_id'=>$room_id
        ];
      $res =  $student->upd($data);
      echo $res;
    }
}

