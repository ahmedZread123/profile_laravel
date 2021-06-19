
@extends('admin.layout')
@section('content')
    
<div class="main-content">
    <div class="wrapper">
        <h1>Add Skills</h1>

        <br><br>

{{-- 

        <form action="{{ route('skills.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="tbl-30">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the skills">
                    </td>
                </tr>

                <tr>
                    <td>main_scor: </td>
                    <td>
                        <input type="number" name="main_scor">
                    </td>
                </tr>

                <tr>
                    <td>L_W_scor: </td>
                    <td>
                        <input type="number" name="L_W_scor">
                    </td>
                </tr>
                <tr>
                    <td>L_M_scor: </td>
                    <td>
                        <input type="number" name="L_M_scor">
                    </td>
                </tr>

              
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Skills" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form> --}}


        <form method="POST" action="{{route('skills.store')}}" >
            @csrf
            {{-- @method('PUT') --}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Cerate Name</label>
              <input type="text" name="title" class="form-control" placeholder="Cerate Name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">main score</label>
                <input type="namber" name="main_score" class="form-control" placeholder="main score">
              </div>
              <br>
              <div class="form-group">
                <label for="exampleFormControlInput1">L_W_scor</label>
                <input type="namber" name="L_W_score" class="form-control" placeholder="L_W_scor">
              </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">L_M_scor</label>
                <input type="namber" name="L_M_score" class="form-control" placeholder="L_W_scor">
              </div>
            <div class="form-group">
                <button type="submit"  class="btn btn-primary">save</button>
            </div>
            {{-- @include('errors') --}}
        </form>

    </div>
</div>

@endsection



