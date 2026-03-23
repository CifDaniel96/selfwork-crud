<nav class="navbar navbar-expand-lg mp-surface">
  <div class="container">
    <a class="navbar-brand fw-bold mp-link" href="{{ route('homepage') }}">
      MotorPulse <span style="color: var(--mp-accent)">•</span>
    </a>

    <div class="d-flex gap-2">
    <a href="{{ route('articles.index') }}" class="btn btn-mp btn-sm">Articoli</a>

    @guest
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm">Registrati</a>
    @endguest

    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-light btn-sm">Logout</button>
        </form>
    @endauth
</div>
  </div>
</nav>