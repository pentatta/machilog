<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function main()
    {
        return view('users.main');
    }

    public function map()
    {
        return view('users.map');
    }
}
