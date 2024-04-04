@extends('layouts.app')
@section('title')
<title>تفاصيل منتج  {{ $product->name }}</title>
@endsection

@section('headertitle')
<h1> {{ $product->name }}</h1>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product Details</div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $product->name }}</p>
                        <p><strong>Description:</strong> {{ $product->description }}</p>
                        <p><strong>Price:</strong> {{ $product->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection