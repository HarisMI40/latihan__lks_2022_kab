<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('customer.login');
    }

    public function login(Request $request)
    {

        $kredensial = $request->only('email', 'password');
        if(Auth::guard('customer')->attempt($kredensial)){
            // dd(Auth::user());
            // return redirect()->route('customer.dashboard');
            return redirect()->intended();
        }else{
            return "Not Loggged";
        }
    }

    public function dashboard() {
        dd(Auth::guard('customer')->user());
        return Auth::user()->name;
    }

    public function about() {
       return "about";
    }

    public function logout(){
        Auth::guard('customer')->logout();
        return "Cusotmer logouted";
    }
}
