<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function home()
    {
        return view('pages.home');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function client()
    {
        return view('pages.client');
    }
}
