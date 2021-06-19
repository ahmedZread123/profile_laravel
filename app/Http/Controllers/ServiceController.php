<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $data = service::all();
        return view('admin\services\manage-service' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\services\add-service');
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
          'detal'=>'required',
        ]);
        $data = service::create($request->all());
        return redirect()->route('services.index')->with('masege','Successfully added ') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    // public function show(service $service)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = service:: find($id);
        return view('admin\services\update-service' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = service::find($id)->update($request->all());
        return redirect()->route('services.index')->with('masege','Successfully update ') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data= service::find($id)->delete();
       return redirect()->route('services.index')->with('masege','Successfully Delete ') ;
    }
}
