<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
	public function index()
	{
		$users = User::all();

		return view('user.index', compact('users'));
	}	

	public function edit($id)
	{
		$user = User::find($id);

		return view('user.edit', compact('user'));
	}

	public function update(Request $request, $id)
	{
		$data = user::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make ($request->password);
        $data->save();
        return redirect()->route('user_index')->with('user','edit');
	}
}
