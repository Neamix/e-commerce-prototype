<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRegisterRequest;
use App\Http\Requests\User\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    /*** Return Login Page */
    public function login()
    {
        return view('auth.login');
    }

    /*** Authunticate User */
    public function signin(UserLoginRequest $request)
    {
        $status = User::login($request->only('email','password'));
        return ($status) ? redirect()->route('pages.home') : redirect()->route('customer.login')->withErrors(['errors' => 'Wrong Credentials']);
    }

    /**** Register User */
    public function register()
    {
        return view('auth.register');
    }

    /**** Register User */
    public function signup(UserRegisterRequest $request)
    {
        User::register($request);
        return redirect()->route('pages.home');
    }

    /*** Logout User */
    public function logout()  {
        Auth::logout();
        return redirect()->back();
    }

    /*** Toggle Whishlist */
    public function addToWhishlist($product_id)
    {
        return Auth::user()->addToWhishlist($product_id);
    }
}
