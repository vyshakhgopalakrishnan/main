@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post"  enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>size</label></br>
        <input type="text" name="size" id="size" class="form-control"></br>
        @error('size')<p class='alert-danger'>{{$message}}</p>@enderror
        <label>color</label></br>
        <input type="text" name="color" id="color" class="form-control"></br>
        @error('color')<p class='alert-danger'>{{$message}}</p>@enderror
        <label>price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        @error('price')<p class='alert-danger'>{{$message}}</p>@enderror
        <label>image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        @error('image')<p class='alert-danger'>{{$message}}</p>@enderror
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop