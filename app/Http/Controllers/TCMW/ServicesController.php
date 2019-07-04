<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;
use App\Services;


class ServicesController extends Controller
{
    public function services() {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        return view('tcmw/services_list', ['nav' => 'services'], compact('posts', 'about', 'services'));
    }

    public function show($slug) {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        $service = Services::where('id', '=', $slug)->firstOrFail();
        return view('tcmw/services_single', ['nav' => 'services'], compact('posts', 'about', 'services', 'service'));
    }
}
