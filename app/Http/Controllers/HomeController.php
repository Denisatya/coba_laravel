<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function biodata()
    {
        $biodata = Biodata::select('*')->get();
        return view('biodata', ['biodata' => $biodata]);
    }
}
