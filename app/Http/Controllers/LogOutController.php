<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogOutController
{
    public function index()
    {
       // return view("logout");
       return 'çıkış yapıldı';
    }
    public function logout(Request $request)
    {
        Session::flush();        
        return redirect()->route('login')
        ->with('success', 'Çıkış yapıldı. Login sayfasına yönlendiriliyorsunuz...');
    }
}
