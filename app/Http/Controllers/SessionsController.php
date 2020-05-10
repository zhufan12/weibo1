<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    public function __construct(){
         $this->middleware('guest', [
            'only' => ['create']
        ]);
         }
     public function create()

    {
        return view('sessions.create');
    }

    public function store(Request $request){
        $credenti  = $this->validate($request,[
            'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

        if (Auth::attempt($credenti,$request->has('remember'))) {
            # code...
            session()->flash('success','歡迎回來');
             $fallback = route('users.show', Auth::user());
            return redirect()->intended($fallback);
        }else{
            session()->flash('danger','很抱歉，您的郵箱和密碼不匹配');
            return redirect()->back()->withInput();
        }
    }

    public function destroy(){
        Auth::logout();
        session()->flash('success','您已經成功退出');
        return redirect('login');
    }
}
