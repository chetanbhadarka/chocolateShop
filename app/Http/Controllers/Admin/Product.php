<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Product extends Controller
{
    public function addproduct_form()
    {
      $res = DB::select("select * from category");
      return view("admin.addproduct",['cat'=>$res]);
    }

    public function viewproduct_form()
    {
    
      $res = DB::select('select * from product,category WHERE P_CAT = CAT_ID');
      return view('admin.viewproduct',['res'=>$res]);
    }

    public function insert_product(Request $product)
    {
      $t = time();
      $pnm = $product->input('pnm');
      $cat = $product->input('cat');
      $price = $product->input('price');
      $desc_ = $product->input('desc');
      $desc = str_replace("'", '', $desc_);
      $image = $product->file('img');
      $imgextension = $image->getClientOriginalExtension();
      $filename = $t . '.' . $imgextension;

      $q = " INSERT INTO `product`(`p_nm`, `p_cat`, `p_price`, `p_desc`, `p_img`) VALUES ('$pnm','$cat','$price','$desc','$filename')";
      DB::insert($q);
      $image->move('upload/',$filename);
          
      return redirect("/admin/addproduct");

    }

    public function delete_product($id)
    {
      $q = "delete from product where p_id=$id";
      DB::delete($q);
      
      return redirect('/admin/viewproduct');
    }

    public function edit_product($id)
    {
      $q = "select * from product,category where p_id=$id";
      $res = DB::select($q);
      
      return view('admin.updateproduct',['res' => $res] );
    }

    public function update_product(Request $request)
    {
      $id=$request->p_id;
      $p_nm=$request->pnm;
      $p_cat=$request->cat;
      $p_price=$request->price;
      $p_desc = $request->desc;
      // $p_gar = $request->gau; 

      // $image = $request->file('img');
      // $imgextension = $image->getClientOriginalExtension();
      // $filename = time() . '.' . $imgextension;
      
      $q = "UPDATE product SET p_nm='$p_nm',p_cat='$p_cat',p_price='$p_price',p_desc='$p_desc' WHERE p_id=$id";
      $res = DB::update($q);
      // $image->move('upload/',$filename);

      return redirect('/admin/viewproduct');
    }

}
