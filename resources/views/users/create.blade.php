@extends('users.layout')
  
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('usersview') }}" method="post">
        {!! csrf_field() !!}
        <label>product_name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control"></br>
        @error('product_name')<p class='alert-danger'>{{$message}}</p>@enderror
        <label>product_MRP</label></br>
        <input type="text" name="product_MRP" id="product_MRP" class="form-control"></br>
        @error('product_MRP')<p class='alert-danger'>{{$message}}</p>@enderror
        <label>product_selling_price</label></br>
        <input type="text" name="product_selling_price" id="product_selling_price" class="form-control"></br>
        @error('product_selling_price')<p class='alert-danger'>{{$message}}</p>@enderror
        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        @error('description')<p class='alert-danger'>{{$message}}</p>@enderror
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection