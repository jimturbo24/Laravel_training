<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {

        $people = ['Mike', 'Juan', 'Gill', 'Barry'];

        return view('welcome', compact('people'));

    }

    public function about()
    {

      return view('pages.about');
    }

    public function contact()
    {
      return view('pages.contact');
    }
}
