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
    public function loginByEmail()
    {
        return view('/auth/login'); #email, password
    }

    public function checklogin(LoginRequest $request)
    {
        $login_field = $request->only(['email', 'password']);
        $result = auth::attempt($login_field);

        if ($result) {
            $userRoles = [];
            return redirect('/auth/login');
        }
        return back()->with('error', 'نام کاربری یا کلمه عبور اشتباه است');

    }
//
//    public function create()
//    {
//        return view('/auth/register');
//    }
//
//    public function register(RegisterRequest $request)
//    {
//        $inputs = $request->only(['name', 'mobile', 'password', 'email']);
//        $inputs['password'] = Hash::make($inputs['password']);
//        $result = User::create($inputs);
//
//        if ($result) {
//            return back()->with('success', 'با موفقیت ارسال شد');
//        } else {
//            return redirect('/auth/register')->with('error');
//        }
//    }
//
//    public function logout()
//    {
//        Auth::logout();
//        Session::flush();
//        return redirect('/auth/login');
//    }


    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return view('auth.register');
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'family' => 'required|string|max:255',
            'mobile' => 'required|string|min:11|max:11',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'password_verification' => 'required|same:password',
        ]);
        Auth::login($user = User::create([
            'name' => $request->name,
            'family' => $request->family,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_verification' => $request->password_verification,
        ]));
        event(new Registered($user));
        return redirect(RouteServiceProvider::HOME);
    }
}
