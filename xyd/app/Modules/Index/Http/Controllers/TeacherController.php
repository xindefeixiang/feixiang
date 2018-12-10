<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Index\Model\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    protected $teacher;
    public function __construct()
    {
        $this->teacher = new Teacher();
    }

    public function teachers_list()
    {
        $data = $this->teacher->getPage();
        return view('index::teacher.teachers_list',['data'=>$data]);
    }
    public function teacher_detail()
    {
        return view('index::teacher.teacher_detail');
    }

}
