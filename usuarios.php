
<div class="d-flex flex-column flex-shrink-0 p-4">                               
    <h2 class="mb-3">Usuários</h2>
    <hr>
    <div style="display: flex; align-items: center; justify-content: space-around;">
        <div style="background-color: gray; border: 1px solid black; border-radius: 10px; padding: 2px 4px;">
            <div style="display: flex;">
                <h6>Ícone</h6>
                <p>Selecionados</p>
            </div>
        </div>
        <div style="background-color: gray; border: 1px solid black; border-radius: 10px; padding: 2px 4px;">
            <div style="display: flex;">
                <h6>Ícone</h6>
                <p>Baixa dados</p>
            </div>
        </div>
        <div style="background-color: gray; border: 1px solid black; border-radius: 10px; padding: 2px 4px;">
            <div style="display: flex;">
                <h6>Ícone</h6>
                <p>Importar dados</p>
            </div>
        </div>
        <div style="background-color: gray; border: 1px solid black; border-radius: 10px; padding: 2px 4px;">
            <div style="text-align: center;">
                <h6 title="Inscritos"><a href="?page=novo-usuario">Novo Usuário</a></h6>
            </div>
        </div>
        <div>
            <div style="text-align: center;">
                <a href="?page=listar-usuarios"><i class="bi bi-sliders2"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="d-flex flex-column flex-shrink-0 p-4">                               
    <hr>
    <?php
        $sql = "SELECT * FROM usuarios ORDER BY nome";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if($qtd > 0)
        {
            print "<form action='' method='post'>";
            print "<table class='table table-hover table-bordered mt-3'>";
                print "<tr>"; 
                print "<th> &nbsp;&nbsp;&nbsp; </th>";                           
                print "<th> Nome </th>";
                print "<th> Perfil </th>";
                print "<th> Email </th>";
                print "<th> Ações </th>";
                print "</tr>";
            while($row = $res->fetch_object())
            {
                print "<tr>";
                print "<td class='pt-3'><input type='checkbox' name='seleciona_usuario id='seleciona_usuario'></td>";
                print "<td class='pt-3'>" . $row->nome . "</td>";                            
                print "<td class='pt-3'>" . $row->perfil . "</td>";
                print "<td class='pt-3'>" . $row->email . "</td>";
                print "<td>
                        <button class='btn btn-primary btn-sm m-2' data-bs-toggle='modal' data-bs-target='#myModal'>Editar</button>

                        <button onclick=\"if(confirm('Tem certeza que deseja excluir o usuário?')){location.href='?page=salvar-usuario&acao=excluir-usuario&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm m-2' data-bs-toggle='modal'>Excluir</button>
                        </td>";
                print "</tr>";
            }
            print "</table>";
            print "</form>";   
        } 
        else
        {
            print "<p class='alert alert-danger mt-3'>Não encontrou usuários</p>";
        }
    ?>
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



                           
 
                                   
            
