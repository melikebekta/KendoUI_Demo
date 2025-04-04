<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class UserEditController
{
    public function index($id)
    {
        $user = UserModel::where("id", $id)->first();
        return view('usersedit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = UserModel::find($request->id);
        if ($user) {
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
            return redirect()->route('users.list');
        }
        return redirect()->back();
    }
}
