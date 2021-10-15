<?php


namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginService
{
    function checkLogin($request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            Session::regenerate();
            Session::push('login', true);
            return redirect()->route('home.index');
        } else {
            return redirect()->route('login.showFormLogin');
        }
    }
    // function checkLogin($request)
    // {
    //     $email = $request->email;
    //     $password = $request->password;

    //     $credentials = [
    //         'email' => $email,
    //         'password' => $password
    //     ];

    //     return Auth::attempt($credentials);

    // }
}
