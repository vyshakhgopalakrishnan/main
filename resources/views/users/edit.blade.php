@extends('users.layout')
   
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('usersview/update') }}" method="post" >
        {!! csrf_field() !!}
        @method("PATCH")
       
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>product_name</label></br>
        <input type="text" name="product_name" id="product_name" value="{{$users->product_name}}" class="form-control"></br>
        <label>product_MRP</label></br>
        <input type="text" name="product_MRP" id="product_MRP" value="{{$users->product_MRP}}" class="form-control"></br>
        <label>product_selling_price</label></br>
        <input type="text" name="product_selling_price" id="product_selling_price" value="{{$users->product_selling_price}}" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" value="{{$users->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection