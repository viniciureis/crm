
<div class="d-flex flex-column flex-shrink-0 p-4">                               
    <h2 class="mb-3">Lista de Leads</h2>
    <hr>
    <?php
        $sql = "SELECT * FROM leads ORDER BY nome";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;

        if($qtd > 0)
        {
            print "<form action='' method='post'>";
            print "<table class='table table-hover table-bordered mt-3'>";
                print "<tr>";
                print "<th> &nbsp;&nbsp;&nbsp; </th>";
                print "<th> Nome </th>";                            
                print "<th> Telefone </th>";
                print "<th> Atendente </th>";
                print "<th> Tratativa </th>";
                print "<th> Data Cadastro </th>";
                print "<th> Forma Ingresso </th>";
                print "<th> Curso </th>";
                print "<th> Local Ação </th>";
                print "<th> Inscrito? </th>";
                print "<th> Matriculado? </th>";
                print "<th> Observação </th>";
                print "</tr>";
            while($row = $res->fetch_object())
            {
                print "<tr>";
                print "<td class='pt-3'><input type='checkbox' name='seleciona_usuario id='seleciona_usuario'></td>";
                print "<td class='pt-3'>" . $row->nome . "</td>";             
                print "<td class='pt-3'>" . $row->telefone . "</td>";
                print "<td class='pt-3'>" . $row->atendente . "</td>";
                print "<td class='pt-3'>" . $row->data_cadastro . "</td>";
                print "<td class='pt-3'>" . $row->forma_ingresso . "</td>";
                print "<td class='pt-3'>" . $row->curso . "</td>";
                print "<td class='pt-3'>" . $row->local_acao . "</td>";
                print "<td class='pt-3'>" . $row->inscrito . "</td>";
                print "<td class='pt-3'>" . $row->matriculado . "</td>";
                print "<td class='pt-3'>" . $row->observacao . "</td>";
                print "<td>
                        <button onclick=\"location.href='?page=editar-lead&id=".$row->id."';\" class='btn btn-primary btn-sm m-2'>Editar</button>

                        <button onclick=\"if(confirm('Tem certeza que deseja excluir o lead?')){location.href='?page=excluir-lead&acao=excluir-lead&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm m-2'>Excluir</button>
                        </td>";
                print "</tr>";
            }
            print "</table>";   
            print "</form>";
        } 
        else
        {
            print "<p class='alert alert-danger mt-3'>Não encontrou resultados</p>";
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



                           
 
                                   
            
