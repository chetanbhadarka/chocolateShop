<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Validator;
class Register extends Controller
{
   public function insert(Request $request)
   {
    $validator=Validator::make($request->all(),[
      'FullName' => 'required|max:30|min:6|unique:users,name',
      'Password' => 'required|confirmed|min:6',
      'email' => 'required|email',
  ]);

if($validator->fails())
{
return redirect('/register')->withErrors($validator)->withInput();
}
        $name=$request->FullName;
        $email=$request->email;
        $pass=$request->Password;

            DB::insert("insert into users(name,email,pass) values('$name','$email', '$pass')");
            return redirect('/');
        
   }


public function dologin_check(Request $clientlogin)
{
  $validator=Validator::make($clientlogin->all(),[
    'UserName' => 'required',
    'Password' => 'required'
  ]);

  if($validator->fails())
  {
    return redirect('/login')->withErrors($validator)->withInput();
  }
    $name = $clientlogin->UserName;
    $password = $clientlogin->Password;

      $q = "select * from users where name='".addslashes($name)."' and pass='".addslashes($password)."'";

    $res=DB::select($q);
    if(! empty ($res))
    {
      $clientlogin->Session()->put('client_name',$name);
      $clientlogin->Session()->put('clientstatus',true);
      return redirect("/");
    }
    else {
        return redirect("/login");
    }
}

  public function logout()
  {
    Session()->forget('client_name');
    Session()->forget('clientstatus');
    echo "Logged Out";
    return redirect("/");
  }
}
