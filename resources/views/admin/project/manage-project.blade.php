
@extends('admin.layout')

@section('content')
<div class="main-content" class="contaner">
   <div class="wrapper">
       <h1>Manage Project</h1>
     
       <br/><br/>

       <!-- Button to Add Admin -->
       <a href="{{ route('project.create') }}" class="btn-primary">Add project</a>
       <br/><br/><br/>
       @if (Session::has('masege'))
          <div class="alert alert-primary" role="alert">{{ Session::get('masege') }}</div>
       @endif
        
       <br/><br/><br/>
      

       <table class="tbl-full">
           <tr>
               <th>S.N.</th>
               <th>Title</th>
               <th>program</th>
               <th>image</th>
               <th>Url</th>
               <th>Action</th>
           </tr>
         
          @foreach ($data as $item)
          
         
           <tr>
               <td>{{$item->id}}</td>
               <td>{{$item->title}}</td>
               <td>{{$item->use_program}}</td>
               <td> <img src="/images/{{$item->image}} " alt="{{$item->title}} "  style="width: 50px; border-radius: 50%;" /></td>
               <td>{{$item->url}}</td>
               <td>
             
                   <a href="{{ route('project.edit' ,$item->id ) }}">  <button type="button" class="btn btn-primary">Update project</button></a>
                   {{-- <a href="{{ route('skills.destroy' ,$item->id ) z }}" class="btn-secondary">DELETE Skill</a> --}}
                   {{-- <a href="{{ route('skills.destroy' ,$item->id) }}" class="btn-danger" @method('DELETE')> Delete Skill</a> --}}
               
                   <form action="{{route('project.destroy',$item->id)}}" method="POST">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-danger">DELETE</button>
                   </form>
               </td>
           </tr>
           @endforeach

       </table>
   </div>
   @if ($data->count() < 1)


   <div class="alert alert-danger" role="alert">Data is Null</div>
@endif
 </div>

@endsection





