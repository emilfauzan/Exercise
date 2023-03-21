<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincollectionController extends Controller
{
    public function admincollection()
    {
        return view('pages.admincollection');
    }
}
