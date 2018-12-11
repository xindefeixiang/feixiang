<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Index\Model\Adverts;
use App\Modules\Index\Model\Org;
use App\Modules\Index\Model\Course;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    protected $adverts;
    protected $org;
    protected $course;
    public function __construct()
    {
        $this->adverts = new Adverts();
        $this->org = new Org();
        $this->course = new Course();
    }

    public function index()
    {
        $image = $this->adverts->getShow();
        $class = $this->course->getLimit();
        $jigou = $this->org->getLimit();
        return view('index::index.index',['data'=>$image,'class' => $class,'org'=>$jigou]);
    }
    public function notfind(){
        return view('index::index.notfind');
    }
}
