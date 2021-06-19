<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\project;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class ProjectController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');  
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = project::all();
        return view('admin.project.manage-project',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.add-project');
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
            'use_program'=>'required',
            'image'=>'required' , 
            'url'=>'required'
          ]);
       
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
       
        $data = array(
            'title'=>$request->title,
            'use_program'=>$request->use_program,
            'image'=>$imageName , 
            'url'=>$request->url
        );
        $data1 = project::create($data);
        return redirect()->route('project.index')->with('masege','Successfully added project ') ;
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    // public function show(project $project)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data = project::find($id);
        return view('admin.project.update-project',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id ,project $data1)
    {
        $request->validate([
            'title'=>'required',
            'use_program'=>'required',
            
          ]);
        if ($request->image){
            $request->validate([

                'image'=> 'required'
            ]);
          $imageName = time() . '.' . $request->image->extension();
          $request->image->move(public_path('images'), $imageName);
          $data = array(
            'title'=>$request->title,
            'use_program'=>$request->use_program,
            'image'=> $imageName
        );
        
        $data1 ->find($id)->update($data );
      }else{
        $data = array(
            'title'=>$request->title,
            'use_program'=>$request->use_program,
            
        );
        
        $data1 ->find($id)->update($data );
      }

        return redirect()->route('project.index')->with('masege','Successfully Update project ') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = project::find($id)->delete();
        return redirect()->route('project.index')->with('masege','Successfully Delete project ') ;
    }

}
