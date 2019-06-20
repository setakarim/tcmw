<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    //
    public function home()
    {
        $posts = Post::all();
        return view('tcmw/home', ['nav' => 'home'], compact('posts'));
    }

    public function services()
    {
        $posts = Post::all();
        return view('tcmw/services', ['nav' => 'services'], compact('posts'));
    }

    public function about()
    {
        $posts = Post::all();
        $pages = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/about', ['nav' => 'about'], compact('posts', 'pages'));
    }

    public function aboutStructure()
    {
        $posts = Post::all();
        return view('tcmw/about_structure', ['nav' => 'about'], compact('posts'));
    }
    public function aboutPRL()
    {
        $posts = Post::all();
        return view('tcmw/about_prl', ['nav' => 'about'], compact('posts'));
    }

    public function contact()
    {
        $posts = Post::all();
        return view('tcmw/contact', ['nav' => 'contact'], compact('posts'));
    }

}
