@extends('users.layout')
   
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('usersview/update') }}" method="post" >
        {!! csrf_field() !!}
        @method("PATCH")
       
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>title</label></br>
        <input type="text" name="title" id="title" value="{{$users->title}}" class="form-control"></br>
        <label>discription</label></br>
        <input type="text" name="discription" id="discription" value="{{$users->discription}}" class="form-control"></br>
        <label>time</label></br>
        <input type="text" name="time" id="time" value="{{$users->time}}" class="form-control"></br>
      
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection