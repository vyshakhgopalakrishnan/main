@extends('frontpages.layout')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->any() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
 
            <div class="col">
                <div class="card">
                    <div class="card-header">product_category</div>
                    <div class="card-body">
                        <a href="{{ url('/product_category/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New   <br>
                           
                        </a>
                        <a href="{{ url('/usersview/') }}" title="show Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>product</button></a><br><br>

                        
                        <!-- <a href="{{ url('/data/') }}" class="btn btn-warning btn-sm " title="home page">
                            <i class="fa fa-plus" aria-hidden="true"></i> home</a> -->

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>product_category</th>
                                      
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($frontpages as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_category }}</td>
                                      
 
                                        <td>
                                            <!-- <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                            <a href="{{ url('/product_category/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a><br><br>

                                            <form method="POST" action="{{ url('/product_category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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