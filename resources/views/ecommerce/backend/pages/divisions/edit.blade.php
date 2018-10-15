@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Edit division
      </div>
      <div class="card-body">
        @include('ecommerce.backend.partials.message')
        <form action="{{ route('backend.division.update', $division->id) }}" method="post">
          @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">Division Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $division->name }}" name="name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Division Priority</label>
              <input type="text" class="form-control" id="exampsleInputEmail1" aria-describedby="emailHelp" value="{{ $division->priority }}" name="priority">
            </div>



            <button type="submit" class="btn btn-primary">update division</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
