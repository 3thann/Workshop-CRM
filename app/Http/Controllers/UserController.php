<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
            return view('account.index', compact('user'));
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('account.index', compact('user'));
    }

}
