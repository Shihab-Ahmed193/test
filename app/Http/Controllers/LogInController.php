<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogInController extends Controller
{
    public function showLoginForm()
    {
        return view("users.login");
    }



    public function login(Request $request)
{       
    $credentials = $request->only('email', 'password');
    if ($user = User::where('email', $credentials['email'])->first()) {
        if (decrypt($user->password) == $credentials['password']) {
            Auth::loginUsingId($user->id);
 
            return redirect("dashboard");
        } 
        return view('users.login')->with('message', 'Invalid Log In Credentials');
    }    
    return view('users.login')->with('message', 'Invalid Log In Credentials');
}


public function reg()
{
    return view("users.reg");
}


}


