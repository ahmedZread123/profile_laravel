
@extends('admin.layout')
@section('content')
    
<div class="main-content">
    <div class="wrapper">
        <h1>Add service</h1>

        <br><br>


        <form action="{{ route('services.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="tbl-30">

                <tr>
                    <td>Title : </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the services">
                    </td>
                </tr>

               <tr>
                
                  <div class="form-group">
                    <td>
                       Detals :
                    </td>
                    <td>
                    <textarea class="form-control" name="detal" rows="5"></textarea>
                </td>
                </div>
               
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add service" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form> 


 

    </div>
</div> 

@endsection



