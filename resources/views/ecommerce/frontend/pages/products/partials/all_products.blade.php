<div class="row">
  @foreach($products as $product)
  <div class="col-md-4 margin_top">
    <div class="card" >
      @php
      $i = 1;
      @endphp
      @foreach($product->images as $image)
      @if( $i > 0)
      <a href="{{route('products.show',$product->slug)}}" ><img class="card-img-top image_pro" src="{{asset('images/products/'.$image->image)}}" alt="Card image"></a>
      @endif
      @php
      $i --;
      @endphp
      @endforeach
      <div class="card-body">
        <h4 class="card-title">
          <a href="{{route('products.show',$product->slug)}}" >{{$product->title}}</a>
          </h4>
        <p class="card-text">Taka -- {{$product->price}}</p>
        <a href="#" class="btn btn-outline-warning">Add to cart</a>
      </div>
    </div>
  </div>

  @endforeach
</div>
<div class="pagination">
{{ $products->links() }}
</div>
