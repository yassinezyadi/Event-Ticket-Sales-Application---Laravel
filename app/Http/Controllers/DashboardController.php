<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show()
    {

        if(Session::get('email') === null) {
            return redirect()->route('login');
        }

        if(Session::get('role') === 'admin') {
            $totalUsers = DB::table('users')->count();
            $totalEvents = DB::table('events')->count();
            $totalAchat = DB::table('achat')->count();
            
            return view('admin.dashbord', compact('totalUsers', 'totalEvents','totalAchat'));
        } else {
            return redirect()->route('client.index');
        }

    }
}
