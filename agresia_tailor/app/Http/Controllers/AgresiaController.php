<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgresiaController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function collection()
    {
        return view('pages.collection');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
