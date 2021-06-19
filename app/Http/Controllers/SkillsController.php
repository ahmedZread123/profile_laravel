<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\skills;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //   $this->middleware('auth');  
    // }

    public function index()
    {
        $data = skills::all();

        return view('admin.skills.manage-skills' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.skills.add-skills');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'title'=>'required',
        'main_score'=>'required',
        'L_W_score'=>'required',
        'L_M_score'=>'required',
        ]);

        $data = skills::create($request->all());
        // return 'store';
       
       return redirect()->route('skills.index')->with('masege' , 'skills added successfle');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(skills $skills)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $skills = skills::all();
        // $data = skills::find($skills);
        // return view('admin.skills.update-skills' , compact('data'));
        return view('admin.skills.update-skills', [
            'data' => skills::findOrFail($id)
        ]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
        'title'=>'required',
        'main_score'=>'required',
        'L_W_score'=>'required',
        'L_M_score'=>'required'
        ]);

         skills::find($id)->update($request->all());
        return redirect()->route('skills.index')
        ->with('masege','Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        skills::find($id)->delete();
        return redirect()->route('skills.index')
        ->with('masege','Successfully Delete');
    }

}
