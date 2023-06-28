<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $login= $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|string',
        ]);
        if (!Auth::attempt($login)){
             response([
                 'message'=> 'invalid login info'
             ]);
        }
        $accessToken=Auth::user()->createToken('authToken')->accessToken;
        return response([
            'user' => Auth::user(),
            'accessToken'=> $accessToken,
        ]);

    }

    public function logout(User $user)
    {
        auth()->user()->tokens()->delete();
//        Auth::logout();
        return [
            'message' => 'user logged out'
        ];
    }
}
