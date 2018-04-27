<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon;
use Auth;
use App\Post;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostsRequest;
use App\User;

class PostsController extends Controller
{

	public function all() {
		$posts = Post::paginate(5);

		return view('welcome', ['posts' => $posts]);
	}

	public function single($id) {
		$posts = Post::findOrFail($id);
		$user_id = $posts->user_id;
		$author = User::findOrFail($user_id);
		return view('posts.single', ['posts' => $posts, 'author' => $author]);
	}

	public function editform($id) {

		$posts = Post::findOrFail($id);
		if ($posts->user_id == Auth::User()->id) {
			return view('posts.editPost', ['post' => $posts]);
		} else {
			return redirect('/');
		}

		
	}

	public function updateAction(PostsRequest $request, $id) {

		$posts = Post::findOrFail($id);
		if ($posts->user_id == Auth::User()->id) {
			$title = $request->input('title');

			$text = $request->input('text');
			$date = date('Y-m-d');

			$postsUpdate = Post::where('id', $id)->update(['title' => $title, 'text' => $text, 'date' => $date]);
		}

		

		return redirect('/');
	}

	public function form() {
		return view('posts.addPost');
	}

	public function store (PostsRequest $request) {
		$user_id = Auth::User()->id;

		$title = $request->input('title');

		$text = $request->input('text');
		$date = date('Y-m-d');

		$moviesAdd = Post::create(['title' => $title, 'text' => $text, 'user_id' => $user_id, 'date' => $date]);

		return redirect('/');
	}

	public function delete ($id) {
		$posts = Post::findOrFail($id);
		if ($posts->user_id == Auth::User()->id) {
			$post = Post::where('id', $id)->delete();
		}

		return redirect('/');
	}	
}
