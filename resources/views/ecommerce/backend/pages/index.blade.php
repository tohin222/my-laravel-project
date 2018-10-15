@extends('ecommerce.backend.pages.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">
      <div class="card card card-body">
        <h1>Welcome to our admin panel</h1>
        <br><br>
      <p>  <a href="{{route('index')}}" class="btn btn-primary">Visit our page</a></p>
      </div>

    </div>
@include('ecommerce.backend.partials.footer')
    </div>


@endsection
