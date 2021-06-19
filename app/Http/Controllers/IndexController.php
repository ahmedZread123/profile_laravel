<?php

namespace App\Http\Controllers;

use App\Models\index;
use App\Models\project;
use App\Models\service;
use App\Models\skills;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = skills::all();
        $project = project::all();
        $service = service::all();

        return view('index' , compact('skills' ,'project' ,'service'));
    }
     public function contact(){
         $data = index::all();
         return view('admin.contact' , compact('data'));

     }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'message' =>'required',
            
        ]);
        $data = index::create($request->all());
        return redirect()->route('index')->with('masege' , 'The message has been sent successfully ');
    }

    
    public function destroy($id)
    {
      $data=  index::findOrFail($id);
      if($data){
          $data->delete();
          return redirect()->route('index-contact')->with('masege' , 'successfully Delete');
      }
        // return redirect()->route('index')->with('masege' , 'successfully Delete');
    }
}
