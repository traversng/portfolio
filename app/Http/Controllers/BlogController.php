<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    protected $fillable = [ 'id', 'author_id','title', 'body', 'created_at', 'updated_at'];
    //
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::all();
        return view('blog.display_posts', compact('posts'));
    }

    public function new_post() {
        $posts = Post::all();
        return view('blog.create_post', compact('posts'));
    }

    public function add_post(Request $request, Post $post) {

        $post = new Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->author_id = $request->user()->id;
        $post->save();
        return redirect('/display_posts');
    }

    public function edit(Post $post) {
        return view('blog.edit_post', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());
        return redirect('/display_posts');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect('/display_posts');
    }
}
