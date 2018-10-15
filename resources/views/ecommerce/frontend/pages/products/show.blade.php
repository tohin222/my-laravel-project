@extends('ecommerce.frontend.layout.master')
@section('title')
{{ $product->title  }} | laravel ecommerce site
@endsection
<!-- start sidebar_cotent -->
@section('content')
<div class="container margin_top">
  <div class="row">
    <!-- slider start -->
    <div class="col-md-4">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @php
          $i=1;
          @endphp
          @foreach($product->images as $image)
              <div class="product_item carousel-item {{ $i == 1 ?  'active':''  }}">
                  <img class="d-block w-100" src="{{asset('images/products/'.$image->image )}}" alt="First slide">
              </div>

            @php
              $i++;
            @endphp

            @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <div class="mt-3">
       <p>category<span class="badge badge-info">{{ $product->category->title  }}</span></p>
      <p> brand<span class="badge badge-info">{{ $product->brand->title  }}</span></p>
    </div>
  </div>
    </div>
        <!-- slider end -->
    <div class="col-md-8">
      <div class="widget">
        <h3>{{$product->title}}  </h3>
        <h3>{{$product->price}}Taka
          <span class="badge badge-primary">
            {{$product->quantity < 1 ? 'no item in available':$product->quantity.'product item in stock'  }}
          </span>
        </h3>
        <hr>
        <div class="product-description">
          {{$product->description}}
        </div>

      </div>
    </div>
    <div class="widget">

    </div>
  </div>

</div>
</div>
@endsection
<!-- end sidebar_cotent -->
