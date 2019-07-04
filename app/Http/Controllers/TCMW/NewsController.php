<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Category;
use App\Services;

class NewsController extends Controller
{
    public function news() {
        $posts = Post::all();
        $author = Post::with('authorId')->get();
        $categories = Category::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        return view('tcmw/news_list', ['nav' => 'news'], compact('posts', 'about', 'categories', 'author', 'services'));
    }

    public function show($slug) {
        $posts = Post::all();
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $categories = Category::all();

	    return view('tcmw/news_single', ['nav' => 'news'], compact('posts', 'post', 'about', 'categories', 'services'));
    }

    public function category($slug) {
        $posts = Post::where('category_id', '=', $slug)->get();
        $author = Post::with('authorId')->get();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $categories = Category::all();
        $category_name = Category::where('id', '=', $slug)->firstOrFail()->name;
	    return view('tcmw/category_list', ['nav' => 'news'], compact('posts', 'about', 'categories', 'author', 'category_name'));
    }
}
