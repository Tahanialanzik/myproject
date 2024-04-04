@extends('layouts.app')
@section('title')
<title>تعديل منتج</title>
@endsection

@section('headertitle')
<h1> {{ $product->name }} تعديل</h1>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Product</div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection