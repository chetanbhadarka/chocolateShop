<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class Cart extends Controller
{
  public function insertcart(Request $request)
  {
      $username=$request->username;
      $product_nm=$request->product_nm;
      $product_price=$request->product_price;
      $product_img=$request->product_img;
      $qty=$request->qty;

      $pro="select * from cart where username = '$username' AND status = '0' ";
      $allpro=DB::select($pro);
      $add=0;
      foreach ($allpro as $val)
      {
          if($val->product_nm==$product_nm)
          {
              $quantity=$val->qty+$qty;
              DB::update("update cart set qty='$quantity' where product_nm='$product_nm' ");
              $add=1;
          }
      }
      if($add==0)
      {
      $q = "insert into cart
      (username,product_nm,product_price,qty,product_img)
      values('$username','$product_nm','$product_price','$qty','$product_img')";

        DB::insert($q);
      }
        return redirect('/cart');
  }
    public function viewcart()
    {
        $username = Session::get('client_name');
        $r="select * from cart where username = '$username' AND status = '0' ";
        $res=DB::select($r);
        $address=DB::select("select address from users where name = '$username'");
        return view('client.layout.cart',['res'=>$res, 'address'=>$address]);
    }
    public function removecart($id)
    {
        DB::delete("delete from cart where id = '$id' ");
        return redirect('/cart');
    }
    public function checkout(Request $request)
    {
        $username = Session::get('client_name');
        $address = $request->address;
        $qty = $request->qty;
        DB::update("update cart set status='1' where username = '$username' ");
        DB::update("update users set address='$address' where name = '$username' ");

        return redirect('/');
    }
}
