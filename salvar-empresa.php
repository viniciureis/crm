<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar-empresa':
            $nome = $_POST["nome"];
            $cnpj = $_POST["cnpj"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $responsavel = $_POST["responsavel"];
            $valor_desconto = $_POST["valor_desconto"];

            $sql = "INSERT INTO empresas 
                    (nome, telefone, atendente, tratativa, data_cadastro, forma_ingresso, curso, local_acao, inscrito, matriculado, observacao) 
                    VALUES 
                    ('{$nome}', '{$telefone}', '{$atendente}', '{$tratativa}', '{$data_cadastro}', '{$forma_ingresso}', '{$curso}', '{$local_acao}', '{$inscrito}', '{$matriculado}', '{$observacao}')";
            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar-empresas';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-empresas';</script>";            }
            break;

        case 'editar-empresa':
            $nome = $_POST["nome"];
            $cnpj = $_POST["cnpj"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $responsavel = $_POST["responsavel"];
            $valor_desconto = $_POST["valor_desconto"];

            $sql = "UPDATE empresas SET nome='{$nome}', 
                                       cnpj='{$cnpj}', 
                                       atendente='{$atendente}',
                                       email='{$email}', 
                                       telefone='{$telefone}',
                                       responsavel='{$responsavel}',
                                       valor_desconto='{$valor_desconto}' 
                                    WHERE id = " .$_REQUEST["id"];
            if($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar-empresas'</script>";
            } else {

                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-empresas'</script>";
            }
            break;
        case 'excluir-empresa':
            $sql = "DELETE from empresas WHERE id= " . $_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res==true) {
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar-empresas'</script>";
            } else {

                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-empresas'</script>";
            }

            break;
    }
?>