<?php

namespace App\Modules\Index\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Modules\Index\Model\Org;
class OrgController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    protected $org;
    public function __construct()
    {
        $this->org = new Org();
    }

    public function org_list()
    {
        $data = $this->org->getPage();
        return view('index::org.org_list',['data'=>$data]);
    }
    public function org_detail_course(){
        return view('index::org.org_detail_course');
    }
    public function org_detail_desc(){
        return view('index::org.org_detail_desc');
    }
    public function org_detail_homepage(){
        return view('index::org.org_detail_homepage');
    }
    public function org_detail_teachers(){
        return view('index::org.org_detail_teachers');
    }



}
