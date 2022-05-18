<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {

        $kredensial = $request->only('email', 'password');
        if(Auth::guard('web')->attempt($kredensial)){
            return redirect()->intended(route('admin.dashboard'));
        }else{
            return "Not Loggged";
        }

        return view('admin/login');
    }

    public function dashboard() {
        return Auth::user()->name;
    }

    public function logout(){
        Auth::logout();
        return "logout";
    }
}
