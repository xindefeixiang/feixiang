<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Index\Model\Course;
use App\Modules\Index\Model\Teacher;
use App\Modules\Index\Model\Org;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    protected $org;
    protected $course;
    protected $teacher;
    public function __construct()
    {
        $this->org = new Org();
        $this->course = new Course();
        $this->teacher = new Teacher();
    }

    public function search(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->post();
            if($data['search_key']=='open_course'){
                $search = $this->course->getSearch($data['search']);
                return view('index::course.course_list',['data'=>$search]);
            }else if($data['search_key']=='teacher'){
                $search = $this->teacher->getSearch($data['search']);
                return view('index::teacher.teachers_list',['data'=>$search]);
            }else{
                $search = $this->org->getSearch($data['search']);
                return view('index::org.org_list',['data'=>$search]);
            }
        }
    }

}
