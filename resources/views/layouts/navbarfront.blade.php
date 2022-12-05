<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Travelism</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/destination" class="nav-link">Wisata</a></li>
          <li class="nav-item"><a href="/hotels" class="nav-link">Hotel</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Kontak</a></li>
          @if (Route::has('login'))
          <li class="nav-item mx-2">
          @auth
                  <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
              @else
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item mx-2">
              @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
              @endif
          @endauth
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
