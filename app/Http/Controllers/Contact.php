<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function contactus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'FullName' => 'required|max:255|min:6',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:20',
            'Message' => 'required|min:20|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }

        $name = $request->FullName;
        $email = $request->email;
        $subject = $request->subject;
        $msg_ = $request->Message;
        $msg = str_replace("'", '', $msg_);

        $q = "insert into contact
        (name,email,subject,msg)
        values('$name','$email','$subject','$msg')";

        DB::insert($q);

        return redirect('/');
    }

    public function viewcontact()
    {
        $r = "select * from contact";
        $res = DB::select($r);
        return view('admin.viewcontact', ['res' => $res]);
    }
}
