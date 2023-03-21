<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collectionController extends Controller
{
    public function collection()
    {
        return view('pages.collection');
    }
}
