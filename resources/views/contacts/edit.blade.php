@extends('contacts.layout')
@section('content')
 
<div class="pt-5">
  <div class="">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/update') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>size</label></br>
        <input type="text" name="size" id="size" value="{{$contacts->size}}" class="form-control"></br>
        
        <label>color</label></br>
        <input type="text" name="color" id="color" value="{{$contacts->color}}" class="form-control"></br>
        
        <label>price</label></br>
        <input type="text" name="price" id="price" value="{{$contacts->price}}" class="form-control"></br>
      
        <label>image</label></br>
        <input type="text" name="image" id="image" value="{{$contacts->image}}" class="form-control"></br>
        <input type="file" name="image" id="image" value="{{$contacts->image}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop