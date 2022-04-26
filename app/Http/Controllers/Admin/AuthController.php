<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:admins,email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.login.index')->with('error', $validator->errors()->first());
        }

        $credentials = $request->only('email', 'password');
        if (!auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.login.index')->with('error', 'Password salah');
        }

        return redirect()->route('admin.home');
    }

    public function logout()
    {
        auth('admin')->logout();

        return redirect()->route('admin.login.index');
    }
}
