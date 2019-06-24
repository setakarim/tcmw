<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Category;

class NewsController extends Controller
{
    //
    public function news() {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $categories = Category::all();
        return view('tcmw/news_list', ['nav' => 'news'], compact('posts', 'about', 'categories'));
    }

    public function show($slug) {
        $posts = Post::all();
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $categories = Category::all();
	    return view('tcmw/news_single', ['nav' => 'news'], compact('posts', 'post', 'about', 'categories'));
    }
}
