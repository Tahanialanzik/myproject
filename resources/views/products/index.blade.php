@extends('layouts.app')

@section('title')
<title>المنتجات</title>
@endsection


@section('headertitle')
<h1>المنتجات</h1>
@endsection
@section('content')
    
    <div class="container">
        <div class="row justify-content-center" -5>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <form action="{{ route('products.index') }}" method="GET">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search products...">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a><a href="{{ route('products.index') }}" class="btn btn-secondary">Show All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection