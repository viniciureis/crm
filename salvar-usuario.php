<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar-usuario':
            $nome = $_POST["nome"];
            $perfil = $_POST["perfil"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            

            $sql = "INSERT INTO usuarios 
                    (nome, perfil, email, senha) 
                    VALUES 
                    ('{$nome}', '{$perfil}', '{$email}', '{$senha}')";
            $res = $conn->query($sql);
            if($res==true) {
                print "<script>alert('Usuário cadastrado com sucesso');</script>";
                print "<script>location.href='?page=listar-usuarios';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar-usuarios';</script>";            }
            break;

        case 'editar-usuario':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $perfil = $_POST["perfil"];

            $sql = "UPDATE usuarios SET nome='{$nome}', 
                                       email='{$email}', 
                                       senha='{$senha}',
                                       perfil='{$perfil}' 
                                    WHERE id = " .$_REQUEST["id"];
            if($res==true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar-usuarios'</script>";
            } else {

                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar-usuarios'</script>";
            }
            break;
        case 'excluir-usuario':
            $sql = "DELETE from usuarios WHERE id= " . $_REQUEST["id"];
            $res = $conn->query($sql);
            
            if($res==true) {
                print "<script>alert('Excluído com sucesso');</script>";
                print "<script>location.href='?page=listar-usuarios'</script>";
            } else {

                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar-usuarios'</script>";
            }

            $sql = "DELETE FROM usuarios WHERE id = " .$_REQUEST["id"];
            break;
    }
?>