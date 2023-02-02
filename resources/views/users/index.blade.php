@extends('users.layout')
 
@section('content')
<div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">careers</div>
                    <div class="card-body">
                        <a href="{{ url('/usersview/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>  

                        <a href="{{ url('/data/') }}" class="btn btn-warning btn-sm " title="home page">
                            <i class="fa fa-plus" aria-hidden="true"></i> home</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>product_name</th>
                                        <th>product_MRP</th>
                                        <th>product_selling_price</th>
                                        <th>description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->product_MRP }}</td>
                                        <td>{{ $item->product_selling_price }}</td>
                                        <td>{{ $item->description }}</td>
                                       
 
                                        </td>
 
                                        <td>
                                            <!-- <a href="{{ url('/usersview/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                            <a href="{{ url('/usersview/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a><br><br>
                                            <a href="{{ url('/contact/index') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> product
                        </a>  <br>
                                            <form method="POST" action="{{ url('/usersview' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
                                </tbody>
                            </table>
                          
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection