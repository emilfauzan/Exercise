<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivatetripdetailController extends Controller
{
    public function index()
    {
        return view('pages.privatetripdetail');
    }
}
