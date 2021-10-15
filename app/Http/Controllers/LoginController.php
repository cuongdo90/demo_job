<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('backends.page.login');
    }

    public function login(LoginRequest $request)
    {
        $email=$request->email;
        $password=$request->password;
        $data = [
            'email' => $email,
            'password' => $password
        ];


        if (Auth::attempt($data)) {
            session()->flash('success','login successfully');
            return redirect()->action([HomeController::class,'index']);
        } else {
            session()->flash('error', 'account not found!');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('page.home');
    }
}
