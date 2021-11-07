<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $is_user = User::where('email', $user->email)->first();

            if (!$is_user) {
                User::create([
                    'fullname' => $user->name,
                    'email' => $user->email,
                    'provider_id'=> $user->id,
                    'avatar' => $user->avatar,
                    'accountType' => false
                ]);

            } else {
                User::where('email', $user->email)->update([
                    'email' => $user->email
                ]);

                Auth::login($is_user);

                return redirect()->route('dashboard.users.index');
            }

            Auth::login($is_user);

            return redirect()->route('dashboard.users.index');

        }  catch(Exception $e) {
                // dd($e->getMessage());

                return redirect()->route('login.google');
        }
    }

}
