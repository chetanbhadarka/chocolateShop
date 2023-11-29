<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Views extends Controller
{
  public function index()
  {
    $q = "select * from product order by p_id DESC limit 0,6";
    $res = DB::select($q);
    return view('client.welcome', ['res' => $res]);
  }

  public function single_page($id)
  {
    $q = "select * from product where p_id=$id";
    $res = DB::select($q);
    return view('client.single', ['res' => $res]);
  }

  public function product_list($id)
  {
    $q = "select * from category,product where cat_id = p_cat and p_cat=$id";
    $res = DB::select($q);
    if (!empty($res)) {
      return view('client.productlist', ['res' => $res]);
    } else {
      return redirect('/');
    }
  }

  public function register()
  {
    $q = "select * from category";
    $res = DB::select($q);
    return view('client.register', ['res' => $res]);
  }

  public function login()
  {
    $q = "select * from category";
    $res = DB::select($q);
    return view('client.login', ['res' => $res]);
  }

  public function about()
  {
    $q = "select * from category";
    $res = DB::select($q);
    return view('client.about', ['res' => $res]);
  }

  public function contact()
  {
    $q = "select * from category";
    $res = DB::select($q);
    return view('client.contact', ['res' => $res]);
  }
}
