<?php
    session_start();
    if(empty($_SESSION)) {
        print "<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRM</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
    </head>
    <body>
        <header>
            <div class="bg-dark bg-gradient" style="color: #f1f1f1;">    	
                <div class="container">
                    <div class="row">
                        <div style="display: flex; justify-content: flex-end;">        			
                        <?php                            
                            print "<div>";						
                            print "<span><i class='fa-solid fa-user' style='color: #ffffff;'></i></span>&nbsp;&nbsp;" . $_SESSION["nome"] . "&nbsp;&nbsp;";                           
                            print "<a href='logout.php' style='color: #ff0000; text-decoration: none;' title='Sair'><i class='fa-solid fa-right-to-bracket' style='color: #ffffff;'></i></a>";
                            print "</div>";
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                    <h1><a href="dashboard.php">CRM</a></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                            <a class="nav-link" href="?page=novo">Nova Ocorrência</a>
                            <a class="nav-link" href="?page=listar">Listar Ocorrências</a>
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
                                include("nova-ocorrencia.php");
                                break;
                            case "listar":
                                include("listar-ocorrencias.php");
                                break; 
                            case "salvar":
                                include("salvar-ocorrencia.php");
                                break;
                            case "editar":
                                include("editar-ocorrencia.php");
                                break;                       
                            default:
                                include("home.php");
                                break;
                        }
                    ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> CRM - Todos os direitos reservados</p>
            </div>        
        </footer>   
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>