<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Session::flush();

        return redirect()->route('client.index')->with('success', 'You have been logged out successfully.');
    }

}
