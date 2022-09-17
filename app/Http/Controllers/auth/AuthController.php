<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {

        $user=Auth::user();
//        $role=User::with('roles')->find($user);
//        $checkrole=explode(',',$role);
        if ( $user->hasRole('SUPERADMIN')) {
            return redirect('/admin/dashboard');
        } else if ($user->hasRole('ADMIN')) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/dashboard');
        }
}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
