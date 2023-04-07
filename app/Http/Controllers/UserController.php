<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
            return view('account.index', compact('users'));
    }
    public function store(Request $request)
    {
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('account.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return redirect()->route('account.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->get('name');
        $users->name = $request->get('email');
        $users->save();

        return redirect()->route('account.index', compact('users'));
    }
}
