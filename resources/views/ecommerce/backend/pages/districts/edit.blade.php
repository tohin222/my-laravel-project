@extends('ecommerce.backend.pages.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-header">
      Add brand
      </div>
      <div class="card-body">
        @include('ecommerce.backend.partials.message')
        <form action="{{route('backend.district.update',$district->id)}}" method="post">
          @csrf
            <div class="form-group">
              <label for="name">District</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{$district->name}}" name="name">
            </div>
            <div class="form-group">
              <label for="division_id">Division</label>
                <select class="form-control" name="division_id">
                  <option value="">please select district</option>
                  @foreach($division as $division)
                        <option value="{{$division->id}}" {{ $district ->division->id == $division->id ? 'selected': '' }}>{{$division->name}}</option>
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
