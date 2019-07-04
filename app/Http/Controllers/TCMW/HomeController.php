<?php

namespace App\Http\Controllers\TCMW;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Project;
use App\Corporate;
use App\Services;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Partner;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $scopes = Corporate::all();
        $partners = Partner::all();
        $services = Services::all();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
        return view('tcmw/home', ['nav' => 'home'], compact('posts', 'about', 'scopes', 'partners', 'services', 'address', 'email'));
    }

    public function about()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $vision = Page::where('slug', '=', 'vision')->firstOrFail()->body;
        $mission = Page::where('slug', '=', 'mission')->firstOrFail()->body;
        $structure = Page::where('slug', '=', 'structure')->firstOrFail();
        $projects = Project::all();
        $services = Services::all();
        $partners = Partner::all();
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
        return view('tcmw/about', ['nav' => 'about'], compact('posts', 'about', 'vision', 'mission', 'structure', 'projects', 'services', 'partners', 'address', 'email'));
    }

    public function contact()
    {
        $posts = Post::all();
        $about = Page::where('slug', '=', 'about')->firstOrFail()->body;
        $contacts = Contact::all();
        $services = Services::all();
        $maps = Contact::where('icon', '=', 'maps')->firstOrFail()->description;
        $address = Contact::where('name', '=', 'Address')->firstOrFail()->description;
        $email = Contact::where('name', '=', 'Email')->firstOrFail()->description;
        return view('tcmw/contact', ['nav' => 'contact'], compact('posts', 'about', 'contacts', 'services', 'maps', 'address', 'email'));
    }

    public function sentMessage(Request $request){

        $name = $request->input('name');
        $mail = $request->input('mail');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $data = array(
            'name' => $name,
            'mail' => $mail,
            'subject' => $subject,
            'message' => $message
        );

        DB::table('inboxes')->insert($data);

        return redirect('/contact');
    }

}
