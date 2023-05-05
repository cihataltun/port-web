<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index() {

        $postsList = Post::all();
        return view('frontend.en.blog.blog', compact('postsList'));
    }

    public function blogDetail($slug) {
        
        $allposts = Post::where('status', 1)->get();
        $post_content = Post::where('status', '1')->where('slug', $slug)->first();
        
        return view('frontend.en.blog.blog-detail', compact('allposts', 'post_content'));
    }
}
