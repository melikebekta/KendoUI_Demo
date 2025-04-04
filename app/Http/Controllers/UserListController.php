<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserListController
{
    public function index(Request $request)
    {
        $users = UserModel::all();
        return view('userslist', compact('users'));
    }
    public function destroy(Request $request)
    {
        UserModel::where('id', $request->id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Başarılı bir şekilde silindi.',
        ]);
    } 
}
