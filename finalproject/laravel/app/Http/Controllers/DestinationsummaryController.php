<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationsummaryController extends Controller
{
    public function index()
    {
        return view('pages.destinationsummary');
    }
}
