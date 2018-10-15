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
        <form action="{{route('backend.district.store')}}" method="post">
          @csrf
            <div class="form-group">
              <label for="name">Division Select for a district</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter  name" name="name">
            </div>
            <div class="form-group">
              <label for="division_id">district</label>
                <select class="form-control" name="division_id">
                  <option value="">please select district</option>
                  @foreach($divisions as $division)
                        <option value="{{$division->id}}">{{$division->name}}</option>
                  @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add District</button>
          </form>
      </div>
    </div>
  </div>
    @include('ecommerce.backend.partials.footer')
</div>


@endsection
