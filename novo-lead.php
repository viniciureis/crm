<h2>Novo Lead</h2>
<form method="post" action="?page=salvar">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">    
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="(xx) xxxx-xxxx">
    </div>
    <div class="mb-3">
        <label for="tratativa">Tratativa</label>
        <br>
        <select>
            <option value="">Selecione...</option>
            <option value="em_conversa">Em conversa</option>
            <option value="matriculado">Matriculado</option>
            <option value="desistente">Desistente</option>
            <option value="nao_atendeu">Não atendeu</option>
            <option value="numero_incorreto">Número incorreto</option>
            <option value="caixa_postal">Caixa postal</option>
            <option value="outros">Outros</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="data_cadastro">Data de Cadastro</label>
        <input type="text" id="data_cadastro" name="data_cadastro" class="form-control" placeholder="dd/mm/aaaa">
    </div>
    <div class="mb-3">
        <label for="forma_ingresso">Forma de Ingresso</label>
        <br>
        <select>
            <option value="">Selecione...</option>
            <option value="bolsa">Bolsa</option>
            <option value="em_conversa">Enem</option>
            <option value="matriculado">Segunda graduação</option>
            <option value="desistente">Transferência</option>
            <option value="nao_atendeu">Vestibular</option>
            <option value="nao_atendeu">Portador de Diploma</option>
        </select>
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
        <input type="text" id="observacao" name="observacao" class="form-control" placeholder="Digite a observação">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>