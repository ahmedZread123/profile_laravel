
@extends('admin.layout')
@section('content')
    
<div class="main-content">
    <div class="wrapper">
        <h1>update Project </h1>

        <br><br>


        <form action="{{ route('project.update',$data ->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         
            <table class="tbl-30">

                <tr>
                    <td>Title : </td>
                    <td>
                        <input type="text" name="title" value="{{ $data -> title }}" placeholder="Title of the Project">
                    </td>
                </tr>
             
                <tr>
                    <td>program </td>
                    <td>
                        <input type="text" name="use_program" value=" {{$data -> use_program }} " placeholder="program of the Project">
                    </td>
                </tr>
                <tr>
                    <td>Old Image </td>
                    <td>
                        <img src="/images/{{$data->image}} " alt="{{$data->title}} "  style="width: 50px; border-radius: 50%;" />
                    </td>
                </tr>

               <tr>
                
                   <div class="form-group">
                        <td>
                          image :
                        </td>
                        <td>
                            
                          <input type="file" class="form-control-file" name="image">
                        
                        </td>
                   </div>
               
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Updater Project" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form> 


 

    </div>
</div> 

@endsection



