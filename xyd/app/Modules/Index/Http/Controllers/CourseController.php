<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Index\Model\Course;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    protected $course;
    public function __construct()
    {
        $this->course = new Course();
    }

    public function course_comment()
    {
        return view('index::course.course_comment');
    }
    public function course_detail(){
        return view('index::course.course_detail');
    }
    public function course_list(){
        $data = $this->course->getPage();
        return view('index::course.course_list',['data'=>$data]);
    }
    public function course_video(){
        return view('index::course.course_video');
    }


}
