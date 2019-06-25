<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Project;
use App\Corporate;
use App\Services;
use App\Contact;

class HomeController extends Controller
{
    //
    public function home()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $scopes = Corporate::all();
        return view('tcmw/home', ['nav' => 'home'], compact('posts', 'about', 'scopes'));
    }

    public function services()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $services = Services::all();
        return view('tcmw/services', ['nav' => 'services'], compact('posts', 'about', 'services'));
    }

    public function about()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $vision = Page::where('slug', '=', 'vision')->firstOrFail()->body;
        $mission = Page::where('slug', '=', 'mission')->firstOrFail()->body;
        $structure = Page::where('slug', '=', 'structure')->firstOrFail();
        $projects = Project::all();
        return view('tcmw/about', ['nav' => 'about'], compact('posts', 'about', 'vision', 'mission', 'structure', 'projects'));
    }

    public function contact()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $contacts = Contact::all();
        return view('tcmw/contact', ['nav' => 'contact'], compact('posts', 'about', 'contacts'));
    }

    // public function saveMessage(Request $request){
    //     //validasi data
    //     $this->validate($request, [
    //         'name'	=> 'required',
    //         'email'	=> 'required',
    //         'subject'	=> 'required'
    //     ]);

    //     //menyimpan ke table posts kemudian redirect page 
    //     $post = Post::create([
    //         'name' => $request->name, 
    //         'email'	=> $request->email,
    //         'subject' => $request->email
    //         ]);
            
    //     return redirect(route('tcmw.contact'));
    // }

}
