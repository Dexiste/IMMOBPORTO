
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="">IMMOB<span class="color-b">PORTO</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('acceuil')}}">Acceuil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('about')}}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('property-grid')}}">Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{route('blog-grid')}}">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="{{route('property-single')}}">Property Single</a>
              <a class="dropdown-item " href="{{route('blog-single')}}">Blog Single</a>
              <a class="dropdown-item " href="{{route('agent-grid')}}">Agents Grid</a>
              <a class="dropdown-item " href="{{route('agent-single')}}">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('contact')}}">Contactes</a>
          </li>
          <li class="nav-item">
          @if(Route::has('login'))
            
            @auth
              <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
          @else
              <a href="{{ route('login') }}" class="nav-link "  class="text-sm text-gray-700 underline">Se Connecter</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"></a>
              @endif
            @endauth
                </div>
          @endif

          
          </li>
        </ul>
      </div>

      

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->
  