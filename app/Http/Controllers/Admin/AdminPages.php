<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPages extends Controller
{
    

    public function vieworder()
    {
      $res = DB::select('select * from cart WHERE status = 1 AND admin_status = 0');
      return view('admin.vieworder',['res'=>$res]);

    }

    public function acceptorder($id)
    {
      DB::update("update cart set admin_status = 1 where id = '$id' ");
      return redirect('/admin/vieworder');

    }

    public function confirmorder()
    {
      $res = DB::select('select * from cart WHERE status = 1 AND admin_status = 1');
      return view('admin.confirmorder',['res'=>$res]);
    }

    public function deleteorder($id)
    {
      DB::delete("delete from cart where id = '$id' ");
      return redirect('/admin/vieworder');

    }

}
