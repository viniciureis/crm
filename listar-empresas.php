<?php require_once('includes/header.php'); ?>
    <main class="d-flex flex-nowrap">
        <aside style="width: 280px;">
            <?php require_once('includes/sidebar.php'); ?>
        </aside>                                 
        <section style="width: 1640px;">
            <div class="d-flex flex-column flex-shrink-0 p-4">                               
                <h2 class="mb-3">Lista de Empresas</h2>
                <hr>
                <?php
                    $sql = "SELECT * FROM empresas ORDER BY nome";
                    $res = $conn->query($sql);
                    $qtd = $res->num_rows;

                    if($qtd > 0)
                    {
                        print "<table class='table table-hover table-bordered mt-3'>";
                            print "<tr>";
                            print "<th> Nome </th>";                            
                            print "<th> CNPJ </th>";
                            print "<th> Email </th>";
                            print "<th> Telefone </th>";
                            print "<th> Responsável </th>";
                            print "<th> Valor do Desconto </th>";
                            print "</tr>";
                        while($row = $res->fetch_object())
                        {
                            print "<tr>";
                            print "<td class='pt-3'>" . $row->nome . "</td>";                            
                            print "<td class='pt-3'>" . $row->cnpj . "</td>";
                            print "<td class='pt-3'>" . $row->email . "</td>";
                            print "<td class='pt-3'>" . $row->telefone . "</td>";            
                            print "<td class='pt-3'>" . $row->responsavel . "</td>";
                            print "<td class='pt-3'>" . $row->valor_desconto . "</td>";
                            print "<td>
                                    <button onclick=\"location.href='?page=editar-empresa&id=".$row->id."';\" class='btn btn-primary btn-sm m-2'>Editar</button>

                                    <button onclick=\"if(confirm('Tem certeza que deseja excluir a empresa?')){location.href='?page=salvar-empresa&acao=excluir-empresa&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm m-2'>Excluir</button>
                                  </td>";
                            print "</tr>";
                        }
                        print "</table>";   
                    } 
                    else
                    {
                        print "<p class='alert alert-danger mt-3'>Não encontrou resultados</p>";
                    }
                ?>
            </div>
        </section>                                                        
    </main>
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
<?php require_once('includes/footer.php'); ?>



                           
 
                                   
            
