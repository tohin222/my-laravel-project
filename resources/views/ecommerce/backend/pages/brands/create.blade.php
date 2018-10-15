@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Add brand
      </div>
      <div class="card-body">
        @include('ecommerce.backend.partials.message')
        <form action="{{route('backend.brand.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter brand name" name="title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group">
              <label for="product">brand image </label>
                    <input type="file" class="form-control" id="product_image" aria-describedby="emailHelp"  name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add brand</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
