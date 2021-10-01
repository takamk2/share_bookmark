<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function getGoogleAuth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function authGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        /** @var User $user */
        $user = User::firstOrCreate([
            'email' => $googleUser->email
        ], [
            'name' => $googleUser->name,
            'email_verified_at' => now(),
            'google_id' => $googleUser->getId()
        ]);
        Auth::login($user, true);

        $token = $user->createToken('api');
        logger($token);

        return redirect('/');
    }
}
