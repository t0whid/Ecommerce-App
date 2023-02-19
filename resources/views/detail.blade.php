@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $products->gallery }}" alt="">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-info" href="{{ url()->previous() }}">Go Back</a>
            <p class="pt-3">{{ $products->name }}</p>
            <p><strong>Price:</strong> {{ $products->price }}</p>
            <p><strong>Detail:</strong> {{ $products->description }}</p>
            <p><strong>Category:</strong> {{ $products->category }}</p>
            <br>
            <form action="/addToCart" class="pb-2" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $products->id }}">
                <button class="btn btn-warning">Add to cart</button>
            </form>
            <button class="btn btn-info">Buy Now</button>
        </div>
    </div>
</div>
@endsection