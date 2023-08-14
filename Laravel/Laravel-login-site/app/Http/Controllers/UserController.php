<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
       $user = new user([
        'name' => $request->name,
        'username' => $request->username,
        'password' => Hash::make($request->password),

       ]);

       $user->save();
       return redirect()->route('login')->with('Success', 'Registration success, please login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
     }


    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username'=> $request->username, 'password'=> $request->password])){
           $request->session()->regenerate();
           return redirect()->intended('/home');
        }else{
            return back()->withErrors('password', 'Wrong username or password!');
        }     
        
    }

}
