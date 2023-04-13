<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpentripsummaryController extends Controller
{
    public function index()
    {
        return view('pages.opentripsummary');
    }
}
