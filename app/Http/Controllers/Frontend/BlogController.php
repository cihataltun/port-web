<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index() {

        $postsList = Post::where('status', 1)->get();
        return view('frontend.en.blog.blog', compact('postsList'));
    }

    public function blogDetail($slug) {
        
        $post_content = Post::where('status', '1')->where('slug', $slug)->first();
        if ($post_content) {
            $category_id = $post_content->category_id;
            $allposts = Post::where('status', 1)->where('category_id', $category_id)->where('slug', '!=', $slug)->get();
            // dd($allposts);
        } else {
            $allposts = collect(); // Varsayılan olarak boş bir koleksiyon döndürülür
        }
        return view('frontend.en.blog.blog-detail', compact('allposts', 'post_content'));
    }
}