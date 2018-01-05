<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\SocialUser;
use App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Config;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function getSocialRedirect($provider){
        $providerKey = Config::get('services.' . $provider);
        if(empty($providerKey)){
            return App::abort(404);
        }
        return Socialite::driver($provider)->redirect();
    }

}
