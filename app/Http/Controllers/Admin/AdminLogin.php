<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Session;
class AdminLogin extends Controller
{
    public function login_form()
    {
      if(Session::has('adminstatus'))
      {
        return redirect('/admin/index');
      }
      else
      {
        return view("admin.login");
      }
    }

    public function login_check(Request $adminlogin)
    {
      $this -> validate($adminlogin,[
        'username' => 'required',
        'password' => 'required'
      ]);
      $username = $adminlogin->username;
      $password = $adminlogin->password;
      $row=DB::select("select * from admin where name='".addslashes($username)."' and pass='".addslashes($password)."'");


      if(! empty ($row))
      {
        $adminlogin->Session()->put('adminnm',$username);
        $adminlogin->Session()->put('adminstatus',true);
        return redirect("/admin/index");
      }
      else {
          return redirect("/admin");
      }
    }

    public function logout(Request $adminlogin)
    {
      $adminlogin->Session()->forget('adminnm');
      $adminlogin->Session()->forget('adminstatus');
      return redirect("/admin");
    }
}
