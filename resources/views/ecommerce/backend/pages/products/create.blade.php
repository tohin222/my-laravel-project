@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Add product
      </div>
      <div class="card-body">
          @include('ecommerce.backend.partials.message')
        <form action="{{route('backend.products.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="Enter Description"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">quantity</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter quantity" name="quantity">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">price</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price">
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
                  @foreach(App\models\Brand::orderBy('title','asc')->get() as $brand)
                  <option value="{{$brand->id}}">{{$brand->title}}</option>


                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="product_image">Product image </label>
              <div class="row">
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="image[]">
                </div>
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="image[]">
                </div>
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="image[]">
                </div>
                <div class="col-md-4">
                      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="image[]">
                </div>

              </div>
            </div>
            <button type="submit" class="btn btn-primary">Add product</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
