@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      brand product
      @include('ecommerce.backend.partials.message')
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Division Name</th>
              <th>Division priority</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($divisions as $division)
              <tr>
                <td>John</td>
                <td>{{ $division->name }}</td>
                <td>{{ $division->priority }}</td>



                <td> <a href="{{route('backend.division.edit',$division->id)}}" class="btn btn-success">edit</a> |
                   <a href="#deleteModal{{$division->id}}" class="btn btn-danger" data-toggle="modal" >delete</a></td>

                   <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{$division->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are sure you delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="{{route('backend.division.delete',$division->id)}}">
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
