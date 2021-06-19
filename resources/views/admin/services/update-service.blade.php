
@extends('admin.layout')
@section('content')
    
<div class="main-content">
    <div class="wrapper">
        <h1>Update services</h1>

        <br><br>
        
         <form method="POST" action="{{route('services.update',$data->id)}}" >
            @csrf
            @method('PUT')
         
            <table class="tbl-30">

                <tr>
                    <td>Title : </td>
                    <td>
                        <input type="text" name="title" value="{{ $data->title}}" placeholder="Title of the services">
                    </td>
                </tr>

               <tr>
                
                  <div class="form-group">
                    <td>
                       Detals :
                    </td>
                    <td>
                    <textarea class="form-control" name="detal" rows="5">{{$data->detal}} </textarea>
                </td>
                </div>
               
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="update service" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form> 
 
        

    </div>
</div>

@endsection



