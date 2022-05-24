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
                        <h3>Categories</h3>
                        <hr>
                        <h4>Category Details</h4>
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Add Categoria</a>
                    </div>
                    <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ url('admin/category/'.$category->id.'/delete') }}" class="btn btn-danger">Delete</a>

                                                    {{-- <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ url('admin/category/'.$category->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form> --}}
                                            </td>
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
