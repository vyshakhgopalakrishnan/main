

@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('product_category') }}" method="post"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>product_category</label></br>
        <input type="text" name="product_category" id="product_category" class="form-control"></br>
        @error('product_category')<p class='alert-danger'>{{$message}}</p>@enderror
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop



