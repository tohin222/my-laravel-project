@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Add Division
      </div>
      <div class="card-body">
        @include('ecommerce.backend.partials.message')
        <form action="{{route('backend.division.store')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="name">Division Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter  name" name="name">
            </div>
            <div class="form-group">
              <label for="priority">Division Priority</label>
              <input type="text" class="form-control" id="priority" aria-describedby="emailHelp" placeholder="Enter priority" name="priority">
            </div>

            <button type="submit" class="btn btn-primary">Add Division</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
