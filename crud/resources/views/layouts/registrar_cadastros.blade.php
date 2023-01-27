<div class="modal fade" id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/create" method="post">

          <input type="hidden" name="_token" value = "<?php echo csrf_token(); ?>" />

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nome Completo:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" maxlength="220" required />
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" maxlength="220" required />
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf" oninput="mascara(this)" placeholder="xxx.xxx.xxx-xx" maxlength="15" required />
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="15" required />
          </div>

          <button type="submit" class="btn add">Cadastrar</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
