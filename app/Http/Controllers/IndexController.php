<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class IndexController 
{
    public function index()
    {
        $user_count = UserModel::count();
        return view('index', compact('user_count'));
    }
    
}
