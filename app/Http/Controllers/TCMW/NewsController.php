<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Services;
use App\Contact;
use App\About;

class NewsController extends Controller
{
    public function news() {
        $posts = Post::all();
        $author = Post::with('authorId')->get();
        $categories = Category::all();
        $about = About::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
        return view('tcmw/news_list', ['nav' => 'news'], compact('posts', 'about', 'categories', 'author', 'services', 'address', 'email'));
    }

    public function show($slug) {
        $posts = Post::all();
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $about = About::where('slug', '=', 'about')->firstOrFail()->body;
        $categories = Category::all();
        $services = Services::all();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
	    return view('tcmw/news_single', ['nav' => 'news'], compact('posts', 'post', 'about', 'categories', 'services', 'address', 'email'));
    }

    public function category($slug) {
        $posts = Post::where('category_id', '=', $slug)->get();
        $author = Post::with('authorId')->get();
        $about = About::where('slug', '=', 'about')->firstOrFail()->body;
        $categories = Category::all();
        $category_name = Category::where('id', '=', $slug)->firstOrFail()->name;
        $services = Services::all();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
	    return view('tcmw/category_list', ['nav' => 'news'], compact('posts', 'about', 'categories', 'author', 'category_name', 'services', 'address', 'email'));
    }
}
