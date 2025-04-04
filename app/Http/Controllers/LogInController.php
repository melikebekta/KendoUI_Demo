<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LogInController
{
    public function index()
    {
        if (session()->has('user')) {
            return redirect()->route('index');
        }
        return view('login');
    }
    public function login(Request $request)
    {
        $user = UserModel::where('email', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]); 
            return redirect()->route('index');
        } else {
            return back()->withErrors(['error' => 'E-posta veya şifre hatalı'])->withInput();
        }
    }
}
