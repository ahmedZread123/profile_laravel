@if (Session::has('message'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-check"></i> Success</h5>
    {{Session::get('message')}}
</div>
@endif
{{-- error by you  --}}
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5> error</h5>
    {{Session::get('error')}}
</div>
@endif

{{-- errors by laravel  --}}
@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-ban"></i> Errors!</h5>
 @foreach ($errors->all() as $error)
 
  <ul>
    <li>{{$error}}</li>
  </ul>
 @endforeach
 
</div>
@endif