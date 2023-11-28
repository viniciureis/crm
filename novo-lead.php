<div class="d-flex flex-column flex-shrink-0 p-4">                           
    <h2 class="mb-3">Novo Lead</h2>
    <hr>
    <form action="?page=salvar-lead" method="post">
        <input type="hidden" name="acao" value="cadastrar-lead">
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="(xx) xxxxx-xxxx">
        </div>
        <div class="mb-3">
            <label for="tratativa">Tratativa</label>
            <input type="text" id="tratativa" name="tratativa" class="form-control">
        </div>
        <div class="mb-3">
            <label for="data_cadastro">Data do cadastro</label>
            <input type="date" id="data_cadastro" name="data_cadastro" class="form-control" placeholder="xx/xx/xxxx">
        </div>
        <div class="mb-3">
            <label for="forma_ingresso">Forma de ingresso</label>
            <input type="text" id="forma_ingresso" name="forma_ingresso" class="form-control">
        </div>
        <div class="mb-3">
            <label for="curso">Curso</label>
            <input type="text" id="curso" name="curso" class="form-control">
        </div>
        <div class="mb-3">
            <label for="local_acao">Local da ação</label>
            <input type="text" id="local_acao" name="local_acao" class="form-control">
        </div>
        <div class="mb-3">
            <label for="inscrito">Inscrito?</label>
            <input type="radio" id="inscrito" name="inscrito" value="sim"> Sim
            <input type="radio" id="inscrito" name="inscrito" value="nao"> Não
        </div>
        <div class="mb-3">
            <label for="matriculado">Matriculado?</label>
            <input type="radio" id="matriculado" name="matriculado" value="sim"> Sim
            <input type="radio" id="matriculado" name="matriculado" value="nao"> Não
        </div>
        <div class="mb-3">
            <label for="observacao">Observação</label>
            <input type="text" id="observacao" name="observacao" class="form-control">
        </div>                    
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>       
<div class="container">
    <div class="row my-5">
        <div class="col offset-5">
            <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Editar Usuário</h5>
                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                            
                        </div>
                        <div class="modal-body">
                            <?php include('editar-usuario.php'); ?>                                            
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>



                           
 
                                   
            
