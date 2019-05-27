<?php

namespace App\Http\Controllers\TCMW;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('tcmw/home', ['nav' => 'home']);
    }

    public function services()
    {
        return view('tcmw/services', ['nav' => 'services']);
    }

    public function about()
    {
        return view('tcmw/about', ['nav' => 'about']);
    }

    public function contact()
    {
        return view('tcmw/contact', ['nav' => 'contact']);
    }
}
