<!-- Login modal -->

<div class="modal fade" id="login-modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary text-center">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('login.auth') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="email" class="form-label">Email</label>
            <input class="mb-2 form-control form-control" type="email" name="email" id="email" placeholder="example@gmail.com" required>
            <label for="password" class="form-label">Palavra passe</label>
            <input class="mb-2 form-control form-control" type="password" name="password" id="password" placeholder="Palavra passe..." required>
            <button type="submit" class="btn btn-primary form-control">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>