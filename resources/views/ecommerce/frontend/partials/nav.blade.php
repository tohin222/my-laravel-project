<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
  <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('products')}}">products</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('contact')}}">contact</a>
</li>
<li class="nav-item">
  <form class="form-inline my-2 my-lg-0"  action="{{route('search')}}" method="get">
    <div class="input-group mb-3" >
      <input type="text" class="form-control" placeholder="product search" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search">
      <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit"> <i class="fa fa-search"></i> </button>
      </div>
    </div>
  </form>
</li>
<!-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</li> -->
</ul>

<ul class="navbar-nav ml-auto">
  <!-- Authentication Links -->
  @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      <li class="nav-item">
          @if (Route::has('register'))
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
      </li>
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->first_name }}{{ Auth::user()->last_name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest

</ul>

</div>
</div>
</nav>
    <!-- navbar part end -->
