    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Beranda</a>
          <a class="nav-link" href="/posts/create">Post</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
            @if (Auth::check())
              <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
              <a class="nav-link ml-auto" href="{{url('logout')}}">Logout</a>
            @endif
            @if (!Auth::check())
              <a class="nav-link ml-auto" href="{{url('login')}}">Login / Register</a>              
            @endif
        </nav>
      </div>
    </div>