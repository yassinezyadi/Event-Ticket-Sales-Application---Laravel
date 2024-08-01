<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\PasswordReset;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $phone = $request->input('phone');
        $email = $request->input('email');
/*         $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');

        if ($password !== $passwordConfirmation) {
            return redirect()->back()->withInput()->with('error', 'Password and password confirmation do not match.');
        } */

        // Generate a random password
        $password = Str::random(8);


        $username =$firstName.$lastName;
        // Create and save the user
        $user = User::create([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phone' => $phone,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => 'user',
            'key' => 1

        ]);

        // Send the welcome email with the password
        Mail::to($user->email)->send(new WelcomeMail($user, $password));

        // Log the user in
        Auth::login($user);

        return redirect()->route('login')->with('success', 'Registration successful! Please check your email for your password.');
    }


    
    public function forgetPassword(Request $request)
    {
        $email = $request->input('email');
        $user = DB::table('users')->where('email', $email)->first();

        if ($user) {
            $token = Str::random(60);
            $expiry = Carbon::now()->addMinutes(60); // Token valid for 1 hour

            DB::table('users')->where('email', $email)->update([
                'reset_token' => $token,
                'token_expires_at' => $expiry,
            ]);

            Mail::to($email)->send(new PasswordReset($token, $email));

            return redirect()->route('login')->with('success', 'Password reset email sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Email not found.');
        }
    }


    public function showResetPasswordForm($token, $email)
    {
        $user = DB::table('users')->where('email', $email)->where('reset_token', $token)->first();

        if (!$user || Carbon::parse($user->token_expires_at)->isPast()) {
            return redirect()->route('login')->with('error', 'Invalid or expired reset token.');
        }

        return view('client.reset-password', ['user' => $user, 'token' => $token]);
    }


    public function processPasswordReset(Request $request)
    {
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');
        $token = $request->input('token');
        $email = $request->input('email');

        // Find user by email and token
        $user = DB::table('users')
            ->where('email', $email)
            ->where('reset_token', $token)
            ->first();

        if (!$user || \Carbon\Carbon::parse($user->token_expires_at)->isPast()) {
            return redirect()->route('login')->with('error', 'Invalid or expired reset token.');
        }

        // Check if passwords match
        if ($password !== $passwordConfirmation) {
            return redirect()->back()->with('error', 'Password and password confirmation do not match.');
        }

        // Update password and clear reset token and expiry
        DB::table('users')->where('email', $email)->update([
            'password' => bcrypt($password),
            'reset_token' => null,
            'token_expires_at' => null,
        ]);

        return redirect()->route('login')->with('success', 'Password updated successfully.');
    }
}
