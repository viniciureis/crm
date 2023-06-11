<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index-usuario.php">Cadastro de clientes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index-usuario.php">Home</a>
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"])
                    {
                        case "novo":
                            include("novo-usuario.php");
                            break;
                        case "listar":
                            include("listar-usuarios.php");
                            break; 
                        case "salvar":
                            include("salvar-usuario.php");
                            break;
                        case "editar":
                            include("editar-usuario.php");
                            break;                       
                        default:
                            include("index-usuario.php");
                            break;
                    }
                ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> CBERSoftware - Todos os direitos reservados</p>
        </div>        
    </footer>   
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
