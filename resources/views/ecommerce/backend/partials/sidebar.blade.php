<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{asset('images/faces/face1.jpg')}}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">faysal ahmed</p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block">New Project
          <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('backend.index')}}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>



    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html"> Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html"> Register </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
          </li>
        </ul>
      </div> -->

        <!-- product sidebar -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">Products manage</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.products')}}">Products </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.products.create')}}">Add new product </a>
          </li>

        </ul>
      </div>
    </li>
      <!-- catagory sidebar -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#catagory" aria-expanded="false" aria-controls="auth">

        <i class="menu-icon fas fa-tags"></i>
        <span class="menu-title">Catagory manage</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="catagory">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.catagory')}}">catagory </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.catagory.create')}}">Add new catagory </a>
          </li>

        </ul>
      </div>
    </li>
    <!-- brand sidebar -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon fab fa-blackberry"></i>
        <span class="menu-title">Brand manage</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="brand">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.brand')}}">brand </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.brand.create')}}">Add new brand </a>
          </li>
        </ul>
      </div>
    </li>
    <!-- division sidebar -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#division" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon fab fa-blackberry"></i>
        <span class="menu-title">Division manage</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="division">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.division')}}">Division </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.division.create')}}">Add new Division </a>
          </li>
        </ul>
      </div>
    </li>
    <!-- District sidebar -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#district" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon fab fa-blackberry"></i>
        <span class="menu-title">District manage</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="district">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.district')}}">District </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('backend.district.create')}}">Add new District </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
