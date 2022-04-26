<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        return view('member.profile.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('member.profile.index')->with('error', $validator->errors()->first())->withInput();
        }

        $user = auth()->user();

        $user->update($request->only('name', 'phone', 'address'));

        return redirect()->route('member.profile.index')->with('success', 'Profil berhasil di ubah')->withInput();
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('member.profile.index')->with('error', $validator->errors()->first())->withInput();
        }

        $user = auth()->user();
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route('member.profile.index')->with('error', 'Password lama salah')->withInput();
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('member.profile.index')->with('success', 'Akun berhasil di ubah')->withInput();
    }
}
