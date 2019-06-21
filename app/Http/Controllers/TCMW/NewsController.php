<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;

class NewsController extends Controller
{
    //
    public function news() {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/news', ['nav' => 'news'], compact('posts', 'about'));
    }

    public function show($slug) {
        $posts = Post::all();
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
	    return view('tcmw/news_single', ['nav' => 'news'], compact('posts', 'post', 'about'));
    }
}
