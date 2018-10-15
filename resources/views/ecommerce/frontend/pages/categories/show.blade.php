@extends('ecommerce.frontend.layout.master')

    <!-- start sidebar_cotent -->
    @section('content')
    <div class="container margin_top">
          <div class="row">
            <div class="col-md-4">
                @include('ecommerce.frontend.partials.sidebar')
            </div>
            <div class="col-md-8">
              <div class="widget">
                <h3>All products in <span class="badge badge-info"> {{$category->title}} category </span>  </h3>
                @php
                $products  = $category->products()->paginate(9);
                @endphp

                @if($products->count()>0)
                  @include('ecommerce.frontend.pages.products.partials.all_products')
                  @else
                  <div class="alert alert-warning">
                    no prducts founds
                  </div>

                @endif



              </div>
              <div class="widget">

              </div>
            </div>

          </div>
    </div>
@endsection
    <!-- end sidebar_cotent -->
