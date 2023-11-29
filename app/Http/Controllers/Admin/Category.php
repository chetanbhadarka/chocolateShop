<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class Category extends Controller
{

    public function addcategory_form()
    {
      return view("admin.addcategory");
    }

    public function viewcategory_form()
    {
      $res = DB::select('select * from category');
      return view('admin.viewcategory',['res'=>$res]);
    }

    public function insert_category(Request $request)
    {
      $cat = $request->cat_nm;
      $t=time();
      $image = $request->file('img');
      $imgextension = $image->getClientOriginalExtension();
      $filename = $t . '.' . $imgextension;
      DB::insert("insert into category (cat_nm,cat_img) values ('$cat','$filename');");
      $image->move('upload/',$filename);

      return redirect('/admin/viewcategory');
    }

    public function delete_category($id)
    {
      $q = "delete from category where cat_id=$id";
      DB::delete($q);
      
      return redirect('/admin/viewcategory');
    }

    public function edit_category($id)
    {
      $q = "select * from category where cat_id=$id";
      $res = DB::select($q);

      // need to update image also
      
      return view('admin.updatecategory',['res'=>$res] );
    }

    public function update_category($id, Request $request)
    {
      $name=$request->cat_nm;
      $q = "UPDATE category SET cat_nm='$name' WHERE cat_id=$id";
      $res = DB::update($q);

      return redirect('/admin/viewcategory');
    }
}
