<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivatetripsummaryController extends Controller
{
    public function index()
    {
        return view('pages.privatetripsummary');
    }
}
