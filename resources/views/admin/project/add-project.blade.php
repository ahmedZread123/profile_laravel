
@extends('admin.layout')
@section('content')
    
<div class="main-content">
    <div class="wrapper">
        <h1>Add Project </h1>

        <br><br>


        <form action="{{ route('project.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="tbl-30">

                <tr>
                    <td>Title : </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Project">
                    </td>
                </tr>
             
                <tr>
                    <td>program </td>
                    <td>
                        <input type="text" name="use_program" placeholder="program of the Project">
                    </td>
                </tr>
                <tr>
                    <td>url </td>
                    <td>
                        <input type="text" name="url" placeholder="url of the Project">
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
                        <input type="submit" name="submit" value="Add Project" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form> 


 

    </div>
</div> 

@endsection



