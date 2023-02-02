@extends('contacts.layout')
@section('content')
 
<div class="pt-5">
  <div class="">product_category</div>
  <div class="card-body">
      
      <form action="{{ url('product_category/update') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{$product_categories->id}}" id="id" />
        <label>product_category</label></br>
        <input type="text" name="product_category" id="product_category" value="{{$product_categories->product_category}}" class="form-control"></br>
        
     
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop