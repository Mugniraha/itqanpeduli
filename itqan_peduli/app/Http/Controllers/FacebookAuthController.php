<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{
    public function socialiteRedirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function callbackSocialite(Request $request ,$social)
    {
        $user = Socialite::driver($social)->user();

        dd($user);
    }
}
