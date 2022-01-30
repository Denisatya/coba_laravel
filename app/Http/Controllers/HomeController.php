<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('biodata.biodata', ['biodata' => $biodata]);
    }
    
    public function tambah()
    {
        return view('biodata.create_biodata');
    }

    public function tambah_action(Request $request)
    {        
        $input = $request->all();
        
        $post = Biodata::create($input);
       
	    return redirect('/biodata');
    }

    public function edit($id)
    {

        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit_biodata')->with('biodata',$biodata);
        
    }

    public function update(Request $request,$id){
       
      
        $biodata = Biodata::find($id)->update($request->all()); 
  
        return redirect('/biodata');
     }

     public function destroy($id){
        Biodata::destroy($id);
  
        return redirect('/biodata');
     }
}
