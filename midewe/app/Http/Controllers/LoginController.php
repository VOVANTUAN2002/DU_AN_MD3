<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login()
    {
        return view('Admin.Login');
    }
    public function Handle(LoginRequest $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($user)) {
            // $user = Auth::user();
            return redirect()->route('decentralized_handling');
            // dd($user);
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }  
        // dd($login);
    }

    public function decentralized_handling()
    {
        $user = Auth::user();
        // dd($user->role_id);
        $login = [];
        $login[0] = '';
        $login[1] = 'LoginAdmin';
        $login[2] = 'LoginUser';
        $login[3] = 'LoginCustomer';
        // dd($login);
        foreach ($login as $key => $value) {
            if($user->role_id == $key){
                return redirect()->route($value);
            }
        }
    }
}
