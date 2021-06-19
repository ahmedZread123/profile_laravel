@extends('admin.layout')

@section('content')
<br><br>
<div  class="container">
<table class="table">
  <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">subject</th>
        <th scope="col">Massage</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
    @php
        $i=1;
    @endphp
      @foreach ($data as $item)
          
     
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->subject}}</td>
      <td>{{$item->message}}</td>
      <td>{{$item->created_at}}</td>
      <td>  <form action="{{route('index-destroy',$item->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">DELETE</button>
      </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection