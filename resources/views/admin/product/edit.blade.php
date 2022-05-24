@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Products</h3>
                        <hr>
                        <h4>Edit Products</h4>
                        <a href="{{ url('admin/products') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/products/'.$product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="name">Select Category</label> 
                            <select name="category_id" class="form-control">
                                @foreach ( $categories as $category )
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>                                    
                                @endforeach
                            </select>
                             <div class="mb-3">
                                <label>Product Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <label>Product Price</label>
                                <input type="text" name="price" class="form-control" value="{{ $product->price }}" placeholder="Price" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection