<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('member.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('member.login.index')->with('error', $validator->errors()->first());
        }

        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('member.home');
        } else {
            return redirect()->route('member.login.index')->with('error', 'Email atau Password salah');
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('member.login.index');
    }
}
