

<form action="?page=salvar-usuario" method="post">
    <input type="hidden" name="acao" value="editar-usuario">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="usuario">Usuário</label>
        <input type="text" id="usuario" name="usuario" value="<?php print $row->usuario; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cargo">Cargo</label>
        <input type="text" id="cargo" name="cargo" value="<?php print $row->cargo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" value="<?php print $row->senha; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="tipo">Tipo</label>
        <input type="text" id="tipo" name="tipo" value="<?php print $row->tipo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_cadastro">Data do Cadastro</label>
        <input type="date" id="data_cadastro" name="data_cadastro" value="<?php print $row->data_cadastro; ?>" class="form-control">
    </div>                    
    <div class="mb-3">
        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
        <button class="btn btn-success">Confirmar</button>
    </div>
</form>
            