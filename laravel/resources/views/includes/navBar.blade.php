 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light py-4">
    <div class="container">
      <a class="navbar-brand text-success" href="/"><strong>SyShop</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
          <li class="nav-item">
            <a class="nav-link" href="/" style="font-weight: 500;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('produto.index') }}" style="font-weight: 500;">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cart.index') }}" style="font-weight: 500;">carrinho <span class="badge bg-secondary">0</span></h6></a>
          </li>
        </ul>
        @auth
            <form action="{{ route('logout') }}" method="post" enctype="multipart/form-data" class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span style="font-weight: 500; color:Gray;">{{auth()->user()->firstName}}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                @csrf
                <li><button class="dropdown-item" type="submit">Sair</button></li>
                </form>
            </ul>
        @else
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login-modal" href="#" style="font-weight: 500;">Login</button>
        @endauth
      </div>
    </div>
  </nav>