<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Author;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('backends.page.register');
    }

    public function register(RegisterRequest $request, User $user)
    {
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);

        if ($request->password===$request->confirm_password) {
            $user->save();
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
                session()->flash('error', 'account not exist!');
                return redirect()->route('login');
            }
        }

           /* return redirect()->action([HomeController::class, 'index']);
        }*/
    }
}
