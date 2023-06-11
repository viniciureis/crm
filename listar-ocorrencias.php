<h2>Listar Ocorrências</h2>
<?php 
    $sql = "SELECT * FROM ocorrencias";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>Nome</th>";
            print "<th>Telefone</th>";
            print "<th>Atendente</th>";
            print "<th>Tratativa</th>";
            print "<th>Cadastro</th>";
            print "<th>Ingresso</th>";
            print "<th>Curso</th>";
            print "<th>Local</th>";
            print "<th>Inscrito</th>";
            print "<th>Matriculado</th>";
            print "<th>Observação</th>";
            print "<th>Ação</th>";
            print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->telefone . "</td>";
            print "<td>" . $row->atendente . "</td>";
            print "<td>" . $row->tratativa . "</td>";
            print "<td>" . $row->data_cadastro . "</td>";
            print "<td>" . $row->forma_ingresso . "</td>";
            print "<td>" . $row->curso . "</td>";
            print "<td>" . $row->local_acao . "</td>";
            print "<td>" . $row->inscrito . "</td>";
            print "<td>" . $row->matriculado . "</td>"; 
            print "<td>" . $row->observacao . "</td>";
            print "<td> 
                        <button onclick=\"location.href='?page=editar&id=". $row->id ."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id ."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
            print "<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
    
?>