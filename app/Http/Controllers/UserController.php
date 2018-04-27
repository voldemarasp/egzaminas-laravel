<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
use App\Http\Requests\PostsRequest;


class UserController extends Controller
{
	public function all() {
		$users = User::all();
		return view('users.all', ['users' => $users]);
	}

	public function userPost($id) {
		$userPosts = Post::where('user_id', $id)->get();
		return view('welcome', ['posts' => $userPosts]);
	}

	public function create () {
		User::create( [
			'name' => 'Best',
			'email' => 'best@admin.com',
			'password' => bcrypt('admin'),
			'role' => 'admin',
			'disabled' => 0
		] );
	}

	public function edit() {
		$id = Auth::User()->id;
		$user = User::findOrFail($id);
		return view('users.edit', ['user' => $user]);
	}

	public function update(PostsRequest $request) {
		$id = Auth::User()->id;

		$name = $request->input('name');
		$email = $request->input('email');
		$password = bcrypt($request->input('password'));

		$user = User::where('id', $id)->update(['name' => $name, 'password' => $password, 'email' => $email]);
		
		$useris = User::findOrFail($id);
		return view('users.edit', ['user' => $useris]);
	}

	public function delete() {
		$id = Auth::User()->id;
		$user = User::where('id', $id)->delete();
		$posts = Post::where('user_id', $id)->delete();
	}
}
