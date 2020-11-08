<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManageUserController extends Controller
{
    public function index(){
		$users = User::all();
		return view('manage-user',['users' => $users]);
	}

	public function add(){
		return view('add-user');
	}

	public function create(Request $request){
		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => $request->password,
			'roles' => $request->roles
		]);
		return redirect('/manage-user');
	}

	public function edit($id){
		$users = User::find($id);
		return view('edit-user',['users'=>$users]);
	}

	public function update($id, Request $request){
		$users = User::find($id);
		$users->name = $request->name;
		$users->email = $request->email;
		$users->password = $request->password;
		$users->roles = $request->roles;
		$users->save();
		return redirect('/manage-user');
	}

	public function delete($id){
		$users = User::find($id);
		$users->delete();
		return redirect('/manage-user');
	}
}
