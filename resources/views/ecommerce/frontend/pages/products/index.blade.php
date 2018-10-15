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
        <h3>feature of product</h3>
        @include('ecommerce.frontend.pages.products.partials.all_products')
      </div>
    </div>
    <div class="widget">

    </div>
  </div>

</div>
</div>
@endsection
<!-- end sidebar_cotent -->
