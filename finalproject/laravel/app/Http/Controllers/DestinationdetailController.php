<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationdetailController extends Controller
{
    public function index()
    {
        return view('pages.destinationdetail');
    }
    public function checkout()
    {
        return view('pages.destinationcheckout');
    }
    public function summary()
    {
        return view('pages.destinationsummary');
    }
    public function success()
    {
        return view('pages.destinationsuccess');
    }
}
