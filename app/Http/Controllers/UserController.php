<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

    return view('account.edit', compact('user'));
}

public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect()->route('account.index', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route("account.index");
    }
}