<div class="list-group">

  @foreach(App\models\Category::orderBy('title','asc')->where('parent_id',NULL)->get() as $parent)
      <a href="#main-{$parent->id}" class="list-group-item" data-toggle="collapse">
      <img src="{{asset('images/catagories/'.$parent->image)}}" alt="no image" width="50">
        {{$parent->title}}
      </a>

      <div class="collapse" id="main-{$parent->id}">
        <div class="child_rows">
          @foreach(App\models\Category::orderBy('title','asc')->where('parent_id',$parent->id)->get() as $child)

          <a href="{{route('categories.show',$child->id)}}" class="list-group-item
            @if(Route::is('categories.show'))
              @if($child->id==$category->id)
                active
              @endif
            @endif
            ">
          <img src="{{asset('images/catagories/'.$child->image)}}" alt="no image" width="30">
            {{$child->title}}
          </a>
          @endforeach
        </div>
    </div>

  @endforeach
</div>
