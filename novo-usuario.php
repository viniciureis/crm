<h2>Novo Usuário</h2>
<form method="post" action="?page=salvar-usuario">
    <input type="hidden" name="acao" value="novo-usuario">
    <div style="display: flex; flex-direction: column;">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome">
    </div>
    <div style="display: flex; flex-direction: column;">
        <label for="perfil">Perfil</label>
        <select name="perfil" id="perfil">
            <option value="">Selecione...</option>
            <option value="1">1 - Administrador</option>
            <option value="2">2 - Colaborador</option>
        </select>
    </div>
    <div style="display: flex; flex-direction: column;">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="login@email.com.br">
    </div>
    <div style="display: flex; flex-direction: column;">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite a senha">
    </div>
    
    <!-- <div style="display: flex; flex-direction: column;">
        <label for="foto">Foto</label>
        <input type="file"> 
    </div>-->
    <br>
    <div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>