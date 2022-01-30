<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BlogFrontController extends Controller
{
    //
    public function tampil_biodata() {

        $biodata = Biodata::select('*')->get();
        return view('blog.index', ['biodata' => $biodata]);

    }

    public function getread($id) {
        
        $biodata = Biodata::find($id);
        return view('blog.detail')->with('biodata',$biodata);
        

    }
}