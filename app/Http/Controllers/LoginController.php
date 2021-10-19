<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return View('login');
    }
    public function doLogin(Request $request)
    {
        $name = $request->name;
        $pass = $request->password;
        $login = Auth::attempt(['name' => $name, 'password' => $pass]);
        return redirect()->route('post.index');
    }
}
