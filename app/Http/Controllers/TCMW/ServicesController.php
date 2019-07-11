<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use App\Services;
use App\Contact;
use App\About;


class ServicesController extends Controller
{
    public function services() {
        $posts = Post::all();
        $about = About::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
        return view('tcmw/services_list', ['nav' => 'services'], compact('posts', 'about', 'services', 'address', 'email'));
    }

    public function show($slug) {
        $posts = Post::all();
        $about = About::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        $service = Services::where('id', '=', $slug)->firstOrFail();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
        return view('tcmw/services_single', ['nav' => 'services'], compact('posts', 'about', 'services', 'service', 'address', 'email'));
    }
}
