<?php

namespace App\Http\Controllers;
use DB;     
use Illuminate\Http\Request;

class About extends Controller
{
        public function index()
        {
            return view('about');   
        }


        public function userinfo()
        {
            $r="select * from users";
            $res=DB::select($r);
            return view('admin.viewuser',['res'=>$res]);
        }
        
}
