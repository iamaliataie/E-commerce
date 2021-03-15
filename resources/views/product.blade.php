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
            <a href="detail/{{$item['id']}}">
            <div class="carousel-caption d-none d-md-block product-caption">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
                </div>
                </a>
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
    <div class="trendings p-5">
        <h3 class="mb-4">Trending Products</h3>
        <div class="row">
        @foreach($products as $item)
            <div class="col-md-3">
                <a href="detail/{{$item['id']}}">
                    <div class="item shadow p-3 mb-5 bg-white rounded">
                        <img src="{{$item['gallery']}}" class="w-100 h-100" alt="">
                        <div class="caption text-center mt-2">
                            <h4>{{$item['name']}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection