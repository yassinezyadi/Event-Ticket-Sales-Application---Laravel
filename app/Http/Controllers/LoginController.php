<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users')->where('email', $email)->first();

        if ($user && $password === $user->password) {

            if ($user->key == 1) {
                Session::put('email', $email);
                Session::put('id', $user->id);
                Session::put('role', $user->role);
                Session::put('username', $user->username);
    
                // Log the user in using Laravel's authentication system
                Auth::loginUsingId($user->id);
    
                return redirect()->route('client.index');
            } elseif ($user->key == 0) {
                return redirect()->back()->with('error', 'Your account is suspended')->withInput();
            }
            
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password')->withInput();
        }
    }
}
