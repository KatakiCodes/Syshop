<!-- Modal -->

<div class="modal fade" id="sign-up-modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success text-center">Criar urilizador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" onsubmit="return onCreateUser_checkConfPassword()">
            @csrf
            <label for="firstName" class="form-label">*Primeiro nome</label>
            <input class="mb-2 form-control form-control" type="text" name="firstName" id="firstName" placeholder="primeiro nome..." required>
  
            <label for="lastName" class="form-label">*segundo nome</label>
            <input class="mb-2 form-control form-control" type="text" name="lastName" id="lastName" placeholder="segundo nome..." required>
  
            <label for="email" class="form-label">*Email</label>
            <input class="mb-2 form-control form-control" type="email" name="email" id="email" placeholder="example@gmail.com" required>
  
            <label for="password" class="form-label">*Palavra passe</label>
            <input class="mb-2 form-control form-control" type="password" name="password" id="password" placeholder="Palavra passe..." required>
  
            <label for="conf-password" class="form-label">*Confirmar palavra passe</label>
            <input class="mb-2 form-control form-control" type="password" name="conf-password" id="conf-password" placeholder="confirmar palavra passe..." required>
            <button type="submit" class="btn btn-success form-control">Criar</button>
          </form>
        </div>
      </div>
    </div>
  </div>