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
        <form action="{{ route('backend.catagory.update', $catagory->id) }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $catagory->title }}" name="title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description(optional)</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Enter Description">{{ $catagory->description }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parent Category(optional)</label>
              <select class="form-control" name="parent_id">
                <option value="">pleast select any catagories</option>
                @foreach($main_catagory as $cat)
                  <option value="{{  $cat->id  }}" {{  $cat->id == $catagory->parent_id ? 'selected' : ''   }} >{{ $cat->title }}</option>
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label for="product">Category old  image </label>
              <img src="{{asset('images/catagories/'.$catagory->image)}}" alt="" width="100">
              <br>
              <label for="product">Category new  image(optional) </label>

              <input type="file" class="form-control" id="product_image" aria-describedby="emailHelp"  name="image">
            </div>
            <button type="submit" class="btn btn-primary">update catagory</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
