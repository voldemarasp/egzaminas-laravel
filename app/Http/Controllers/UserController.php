<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;


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
}
