<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class SevicesController extends Controller
{
    public function index()
    {
        //$data['services']= ['a','a'];
        //return view('page',$data);
        $datas =Service::all();
        return view('page',['datas'=>$datas]);
    }
}
