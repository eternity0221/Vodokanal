<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home ()
    {
        return view('welcome');
    }

    public function contact ()
    {
        return view('pages.contact.contact');
    }

    public function about ()
    {
        return view('pages.about.about');
    }
}
