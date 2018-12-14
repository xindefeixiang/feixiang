<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Modules\Admin\Model\Sclass;
use App\Modules\Admin\Model\Room;
class RoomController extends Controller
{
        public function roomAdd(Request $request){
            if (!$request->isMethod('post')) {
                // 要执行的代码
                $class = new Sclass();
                $classes = $class->getAll();
                return view('admin::room.roomadd',['class'=>$classes]);
            } else {
                $room = new Room();
               // var_dump($request->input());
                $data = [
                    'name'=>$request->input('name'),
                    'class_id'=>$request->input('class_id'),
                    'info'=>$request->input('info'),
                    'add_time'=>$request->input('add_time'),
                ];
                if($room->roomAdd($data)){
                    return redirect('admin/roomList');
                }else{
                    echo 'Error';die;
                }
            }
        }
        public function roomList(){
            $room = new Room();
            $data = $room->tow();

            return view('admin::room.roomlist',['data'=>$data]);
        }
}