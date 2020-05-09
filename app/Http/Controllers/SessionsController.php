<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
     public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request){
        $credenti  = $this->validate($request,[
            'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

        if (Auth::attempt($credenti)) {
            # code...
            session()->flash('success','歡迎回來');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','很抱歉，您的郵箱和密碼不匹配');
            return redirect()->back()->withInput();
        }
    }

}
