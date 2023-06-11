<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $atendente = $_POST["atendente"];
            $tratativa = $_POST["tratativa"];
            $data_cadastro = $_POST["data_cadastro"];
            $forma_ingresso = $_POST["forma_ingresso"];
            $curso = $_POST["curso"];
            $local_acao = $_POST["local_acao"];
            $inscrito = $_POST["inscrito"];
            $matriculado = $_POST["matriculado"];
            $observacao = $_POST["observacao"];

            $sql = "INSERT INTO ocorrencias 
                    (nome, telefone, atendente, tratativa, data_cadastro, forma_ingresso, curso, local_acao, inscrito, matriculado, observacao) 
                    VALUES 
                    ('{$nome}', '{$telefone}', '{$atendente}', '{$tratativa}', '{$data_cadastro}', '{$forma_ingresso}', '{$curso}', '{$local_acao}', '{$inscrito}', '{$matriculado}', '{$observacao}')";
            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $atendente = $_POST["atendente"];
            $tratativa = $_POST["tratativa"];
            $data_cadastro = $_POST["data_cadastro"];
            $forma_ingresso = $_POST["forma_ingresso"];
            $curso = $_POST["curso"];
            $local_acao = $_POST["local_acao"];
            $inscrito = $_POST["inscrito"];
            $matriculado = $_POST["matriculado"];
            $observacao = $_POST["observacao"];

            $sql = "UPDATE ocorrencias SET nome='{$nome}', 
                                       telefone='{$telefone}', 
                                       atendente='{$atendente}',
                                       tratativa='{$tratativa}', 
                                       data_cadastro='{$data_cadastro}',
                                       forma_ingresso='{$forma_ingresso}',
                                       curso='{$curso}',
                                       local_acao='{$local_acao}',
                                       inscrito='{$inscrito}',
                                       matriculado='{$matriculado}',
                                       observacao='{$observacao}' 
                                    WHERE id = " .$_REQUEST["id"];
            if($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {

                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar'</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE from ocorrencias WHERE id= " . $_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res==true) {
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {

                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar'</script>";
            }

            $sql = "DELETE FROM ocorrencias WHERE id = " .$_REQUEST["id"];
            break;
    }
?>