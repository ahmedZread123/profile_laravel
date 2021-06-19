
@extends('admin.layout')
@section('content')
    
<div class="main-content">
    <div class="wrapper">
        <h1>Update Skills</h1>

        <br><br>
        
         <form method="POST" action="{{route('skills.update',$data->id)}}" >
            @csrf
            @method('PUT')
         

            <div class="form-group">
              <label for="exampleFormControlInput1">Cerate Name</label>
              <input type="text" name="title" class="form-control" value="{{$data->title}}" placeholder="Cerate Name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">main score</label>
                <input type="namber" name="main_score" class="form-control" value="{{$data->main_score}}" placeholder="main score">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleFormControlInput1">L_W_scor</label>
                <input type="namber" name="L_W_score" class="form-control" value="{{$data->L_W_score}}" placeholder="L_W_scor">
              </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">L_W_scor</label>
                <input type="namber" name="L_M_score" class="form-control" value="{{$data->L_M_score}}" placeholder="L_W_scor">
              </div>
            <div class="form-group">
                <button type="submit"  class="btn btn-primary">save</button>
            </div>

         
        </form>
 
        

    </div>
</div>

@endsection



