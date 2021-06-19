
@extends('admin.layout')

@section('content')
<div class="main-content" class="contaner">
   <div class="wrapper">
       <h1>Manage services</h1>
     
       <br/><br/>

       <!-- Button to Add Admin -->
       <a href="{{ route('services.create') }}" class="btn-primary">Add services</a>
       <br/><br/><br/>
       @if (Session::has('masege'))
          <div class="alert alert-primary" role="alert">{{ Session::get('masege') }}</div>
       @endif
        
       <br/><br/><br/>
      

       <table class="tbl-full">
           <tr>
               <th>S.N.</th>
               <th>Title</th>
               <th>Detals</th>
               <th>Actions</th>
           </tr>
         @php
             $i=1;
         @endphp
          @foreach ($data as $item)
          
         
           <tr>
               <td>{{$i++}}</td>
               <td>{{$item->title}}</td>
               <td>{{$item->detal}}</td>
        
              
               <td>
                   <a href="{{ route('services.edit' ,$item->id ) }}" class="btn-secondary">Update services</a>
                   {{-- <a href="{{ route('skills.destroy' ,$item->id ) z }}" class="btn-secondary">DELETE Skill</a> --}}
                   {{-- <a href="{{ route('skills.destroy' ,$item->id) }}" class="btn-danger" @method('DELETE')> Delete Skill</a> --}}
               </td>
               <td>   
                   <form action="{{route('services.destroy',$item->id)}}" method="POST">
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





