<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======

use Auth;

>>>>>>> login-logout
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
<<<<<<< HEAD
=======

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

       if (Auth::attempt($credentials, $request->has('remember'))) {
        session()->flash('success', '欢迎回来！');
        return redirect()->route('users.show', [Auth::user()]);// 登录成功后的相关操作
        } else {
        session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
        return redirect()->back()->withInput();// 登录失败后的相关操作
        }

    }
>>>>>>> login-logout
}
