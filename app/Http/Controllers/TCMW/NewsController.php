<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    //
    public function news() {
        $posts = Post::all();
        return view('tcmw\news', ['nav' => 'news'], compact('posts'));
    }

    public function show($slug) {
        $posts = Post::all();
        $post = Post::where('slug', '=', $slug)->firstOrFail();
	    return view('tcmw\news_single', ['nav' => 'news'], compact('posts', 'post'));
    }
}
