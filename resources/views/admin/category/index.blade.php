@extends('layouts.app')
@sections('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Categories</h3>
                        <hr>
                        <h4>Category Details</h4>
                        <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Add Categoria</a>



                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection