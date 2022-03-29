<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Nette\InvalidStateException;

class SocialiteController extends Controller
{
    public function redirect($service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function callback($service)
    {
        $socialite=  Socialite::driver($service)->user();

        return $socialite['name'];
    }
}
