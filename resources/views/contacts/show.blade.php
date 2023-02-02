@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">size : {{ $contacts->size }}</h5>
        <p class="card-text">color : {{ $contacts->color }}</p>
        <p class="card-text">price : {{ $contacts->price }}</p>
        <p class="card-text">image : {{ $contacts->image }}</p>
  </div>
       
    </hr>
  
  </div>
</div>