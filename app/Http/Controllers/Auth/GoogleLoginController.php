<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class GoogleLoginController extends Controller
{
    // sending user to google oauth 
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    // handle callback
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            //find the existing user by their social id in the users table
            $finduser = User::where('social_id', $user->id)->first();
            // if the user exists log them in
            // if not create a new user with social type google 
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password' => encrypt('my-google')
                ]);
                // authenticate user
                Auth::login($newUser);

                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
