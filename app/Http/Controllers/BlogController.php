<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    protected $fillable = ['title', 'body'];
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
        $post->slug = str_slug($post->title);
        $post->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $post->active = 0;
            $message = 'Post saved successfully';
        }
        else
        {
            $post->active = 1;
            $message = 'Post published successfully';
        }
        $post->save();
        return redirect('/display_posts')->withMessage($message);
    }
}
