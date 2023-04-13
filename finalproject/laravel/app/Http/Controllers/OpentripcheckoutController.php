<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpentripcheckoutController extends Controller
{
    public function index()
    {
        return view('pages.opentripcheckout');
    }
}
