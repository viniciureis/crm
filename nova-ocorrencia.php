<h2>Nova Ocorrência</h2>
<form method="post" action="?page=salvar">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">    
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label for="atendente">Atendente</label>
        <input type="text" id="atendente" name="atendente" class="form-control">
    </div>
    <div class="mb-3">
        <label for="tratativa">Tratativa</label>
        <input type="text" id="tratativa" name="tratativa" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_cadastro">Data de Cadastro</label>
        <input type="date" id="data_cadastro" name="data_cadastro" class="form-control">
    </div>
    <div class="mb-3">
        <label for="forma_ingresso">Forma de Ingresso</label>
        <input type="text" id="forma_ingresso" name="forma_ingresso" class="form-control">
    </div>
    <div class="mb-3">
        <label for="curso">Curso</label>
        <input type="text" id="curso" name="curso" class="form-control">
    </div>
    <div class="mb-3">
        <label for="local_acao">Local da Ação</label>
        <input type="text" id="local_acao" name="local_acao" class="form-control">
    </div>
    <div class="mb-3">
        <label for="inscrito">Inscrito?</label>
        <input type="radio" id="inscrito" name="inscrito" value="1">&nbsp;Sim
        <input type="radio" id="inscrito" name="inscrito" value="0">&nbsp;Não
    </div>
    <div class="mb-3">
        <label for="matriculado">Matriculado?</label>
        <input type="radio" id="matriculado" name="matriculado" value="1">&nbsp;Sim
        <input type="radio" id="matriculado" name="matriculado" value="0">&nbsp;Não
    </div>
    <div class="mb-3">
        <label for="observacao">Observação</label>
        <textarea name="observacao" id="observacao" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>