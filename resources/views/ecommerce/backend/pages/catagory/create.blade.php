@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Add catagory
      </div>
      <div class="card-body">
        @include('ecommerce.backend.partials.message')
        <form action="{{route('backend.catagory.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter catagory name" name="title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parent Category(Optional)</label>
              <select class="form-control" name="parent_id">
                <option value="">--select one --</option>
                @foreach($main_catagory as$catagory)
                  <option value="{{  $catagory->id  }}">{{  $catagory->title  }}</option>
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label for="product">Category image </label>
                    <input type="file" class="form-control" id="product_image" aria-describedby="emailHelp"  name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add catagory</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
