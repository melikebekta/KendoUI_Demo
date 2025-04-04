<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\UserModel;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SettingController
{
    public function index()
    {
        return view('settings');
    }
    public function passwordReset(Request $request)
    {
        $request->validate([
            'cu_password' => 'required|min:6',
            'new_password' => 'required|min:6',
            'co_password' => 'required|min:6',
        ]);
        if ($request->new_password != $request->co_password) {
            return back()->withErrors(['error' => 'Yeni şifreler eşleşmiyor'])->withInput();
        }
        $user = UserModel::where('email', session('user')->email)->first();
        if (!$user || !Hash::check($request->cu_password, $user->password)) {
            return back()->withErrors(['error' => 'Mevcut şifreniz hatalı'])->withInput();
        }
        $user->password = Hash::make($request->new_password);
        $user->save();
        return redirect()->route('settings')->with('success', 'Şifre başarıyla değiştirildi.');
    }
}
