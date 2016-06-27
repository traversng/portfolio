<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class PortfolioController extends Controller
{
    // Index page controller
    public function index() {
        return view('portfolio.index');
    }

    // About page controller
    public function about() {
        return view('portfolio.about');
    }

    // Contact page controller
    public function contact() {
        return view('portfolio.contact');
    }

    // Blog home page controller
    public function blog_list() {
        $posts = Post::all();
        return view('portfolio.blog_list', compact('posts'));
    }

    // Blog detail page controller
    public function blog_post() {
        return view('portfolio.blog_post');
    }

    public function details(Post $post) {
        return view('portfolio.post_details', compact('post'));
    }
}
