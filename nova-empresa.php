<div class="d-flex flex-column flex-shrink-0 p-4">                               
    <h2 class="mb-3">Nova Empresa</h2>
    <hr>
    <form action="?page=salvar-empresa" method="post">
        <input type="hidden" name="acao" value="cadastrar-empresa">
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="perfil">Perfil</label>
            <input type="text" id="perfil" name="perfil" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control">
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



                           
 
                                   
            
