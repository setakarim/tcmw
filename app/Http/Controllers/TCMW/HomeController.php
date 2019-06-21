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
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/home', ['nav' => 'home'], compact('posts', 'about'));
    }

    public function services()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/services', ['nav' => 'services'], compact('posts', 'about'));
    }

    public function about()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $vision = Page::where('slug', '=', 'vision')->firstOrFail()->body;
        $mission = Page::where('slug', '=', 'mission')->firstOrFail()->body;
        return view('tcmw/about', ['nav' => 'about'], compact('posts', 'about', 'vision', 'mission'));
    }

    public function aboutStructure()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/about_structure', ['nav' => 'about'], compact('posts', 'about'));
    }
    public function aboutPRL()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/about_prl', ['nav' => 'about'], compact('posts', 'about'));
    }

    public function contact()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        return view('tcmw/contact', ['nav' => 'contact'], compact('posts', 'about'));
    }

}
