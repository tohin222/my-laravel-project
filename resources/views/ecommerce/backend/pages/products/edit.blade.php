@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Product update
      </div>
      <div class="card-body">
        @include('ecommerce.backend.partials.message')
        <form action="{{route('backend.products.update', $products->id)}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="title" value="{{ $products->title }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control"  >{{ $products->description }}</textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">quantity</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $products->quantity }}"   name="quantity">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">price</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $products->price }}" name="price">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Category</label>
              <select class="form-control" name="category_id">
                <option value="">---please select one--</option>
                  @foreach(App\models\Category::orderBy('title','asc')->where('parent_id',NULL)->get() as $parent)
                  <option value="{{$parent->id}}">{{$parent->title}}</option>
                    @foreach(App\models\Category::orderBy('title','asc')->where('parent_id',$parent->id)->get() as $child)
                        <option value="{{$child->id}}">-------->{{$child->title}}</option>
                    @endforeach

                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Brand</label>
              <select class="form-control" name="brand_id">
                <option value="">---please select one--</option>
                  @foreach(App\models\Brand::orderBy('title','asc')->get() as $br)
                  <option value="{{$br->id}}">{{$br->title}}</option>


                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="product_image">Product image </label>
              <div class="row">
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="product_image[]">
                </div>
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="product_image[]">
                </div>
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="product_image[]">
                </div>
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="product_image[]">
                </div>

              </div>
            </div>
            <button type="submit" class="btn btn-primary">Update product</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
