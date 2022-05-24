@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>                    
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Products</h3>
                        <hr>
                        <h4>Product Details</h4>
                        <a href="{{ url('admin/products/create') }}" class="btn btn-primary float-end">Add Product</a>
                    </div>
                    <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                                {{-- <form action="{{ url('admin/products/'.$product->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form> --}}    
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
