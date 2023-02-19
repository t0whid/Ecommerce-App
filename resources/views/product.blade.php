@extends('master')
@section('content')


<section class="pt-2">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($products as $item)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $item->id }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="carousel-item text-center {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>{{$item['name']}}</h3>
                       <!--  <p>{{$item['description']}}</p> -->
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section>
<div class="trending-wrapper">
        <h3>Tredning Products</h3>
        @foreach ($products as $item)
        <div class="trening-item p-2">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                    <p>{{$item['name']}}</p>
                </div>
            </a>
        </div>
        @endforeach
        
        <div>
        {{ $products->links() }}
        </div>
        

    </div>
    
@endsection