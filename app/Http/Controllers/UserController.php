<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\updateinfo;

class UserController extends Controller
{
    public function adduser (Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName= $request->input('last_name');
        $phone= $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');
       
        $username = $firstName.' '.$lastName;
        DB::table('users')->insert([
            'firstName' =>  $firstName,
            'lastName' =>  $lastName,
            'phone' =>  $phone,
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'role'=> $role,
            'key'=> 1
        ]);

        
        
        Mail::to($email)->send(new RegistrationConfirmation($username, $role, $email, $password));





        return redirect('/my_teams')->with('success', 'Utilisateur ajouté avec succès.');
    }


    public function updateuser (Request $request,$id)
    {
        $firstName = $request->input('first_name');
        $lastName= $request->input('last_name');
        $phone= $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        $username = $firstName.' '.$lastName;
        DB::table('users')->where('id', $id)->update([
            'firstName' =>  $firstName,
            'lastName' =>  $lastName,
            'username'  => $username,
            'phone' =>  $phone,
            'email' => $email,
            'password' => $password,
            'role'=> $role,

        ]);



        
        
        Mail::to($email)->send(new updateinfo($username,$email, $password));





        return redirect('/my_teams')->with('success', 'Vos informations ont été mises à jour avec succès.');
    }


    

    public function activateuser($id){

        DB::table('users')->where('id',$id)->update(['key' => 1]);
        

        return back()->with('war', 'successfully updated');
    
    }
    public function Unactivateuser($id){
        DB::table('users')->where('id',$id)->update(['key' => 0]);

        return back()->with('war', 'successfully updated'); 
    }
}
