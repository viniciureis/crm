<h2>Nova Empresa</h2>
<form method="post" action="?page=salvar-empresa">
    <input type="hidden" name="acao" value="nova-empresa">
    <fieldset>
        <legend>Cadastrar uma nova empresa</legend>
        <div style="display: flex; flex-direction: column;">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label for="email">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="Digite o CNPJ">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label for="email_empresa">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="email@email.com">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label for="email">Telefone</label>
            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(xx) xxxx-xxxx">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label for="responsavel">Responsável</label>
            <input type="text" id="responsavel" name="responsavel" class="form-control" placeholder="Digite o responsável">
        </div>
        <div style="display: flex; flex-direction: column;">
            <label for="valor_desconto">Valor de Desconto</label>
            <input type="text" id="valor_desconto" name="valor_desconto" class="form-control" placeholder="Digite o valor do desconto">
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </fieldset>
</form>