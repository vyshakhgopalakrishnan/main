@extends('users.layout')
  
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">product_name : {{ $usersview->product_name }}</h5>
        <p class="card-text">product_MRP : {{ $usersview->product_MRP }}</p>
        <p class="card-text">product_selling_price : {{ $usersview->product_selling_price }}</p>
        <p class="card-text">description : {{ $usersview->description }}</p>
  </div>
       
    
  
  </div>
</div>