@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Categories</h3>
                        <hr>
                        <h4>Create Categories</h4>
                        <a href="{{ url('admin/category') }}" class="btn btn-primary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/category') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Category Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
