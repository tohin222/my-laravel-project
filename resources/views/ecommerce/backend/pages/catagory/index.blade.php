@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      catagory product
      @include('ecommerce.backend.partials.message')
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Catagory name</th>
              <th>Catagory image</th>
              <th>parent catagory</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($catagory as $catagory)
              <tr>
                <td>John</td>
                <td>{{ $catagory->title }}</td>
                <td> <img src="{{asset('images/catagories/'.$catagory->image)}}" alt="" width="100"> </td>
                <td>

                @if($catagory->parent_id==NULL)
                Primary catagory
                @else
                  {{ $catagory->parent->title }}
                  @endif
                </td>

                <td> <a href="{{route('backend.catagory.edit',$catagory->id)}}" class="btn btn-success">edit</a> |
                   <a href="#deleteModal{{$catagory->id}}" class="btn btn-danger" data-toggle="modal" >delete</a></td>

                   <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{$catagory->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are sure you delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{route('backend.catagory.delete',$catagory->id)}}">
                              @csrf
                              <button type="submit" class="btn btn-primary mb-2">delete confirm</button>
                              </form>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                              </div>

                          </div>

                        </div>
                      </div>
                    </div>
              </tr>
            @endforeach
          </tbody>
      </table>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection