@extends('master')
@section('content')
<div class="product">
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner ">
            @foreach($products as $item)
            <div class="carousel-item product {{$item['id']==1?'active':''}}">
            <img class="d-block w-100" src="{{$item['gallery']}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block product-caption">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
                </div>
            </div>
            @endforeach
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection