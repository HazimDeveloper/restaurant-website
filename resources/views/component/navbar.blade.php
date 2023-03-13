 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
     
        <h1>Aroma<span>Kitchen</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
     
          <li><a href="#contact">Contact</a></li>

          @if (Auth::check())
          
          <li class="dropdown"><a href="#"><span>Welcome Back,{{ auth()->user()->name }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/dashboard">My Dashboard</a></li>
              <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
          </li>    
          @else
          <li><a href=" {{ url('/login') }}" class="btn btn-danger text-white py-2 px-3">Get Started</a></li>

          @endif
          
        </ul>
      </nav><!-- .navbar -->

      {{-- <a class="btn-book-a-table" href="#book-a-table">Book a Table</a> --}}
      {{-- <a class="btn-book-a-table" href="#book-a-table">Welcome , Muhammad Hazim </a> --}}
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->