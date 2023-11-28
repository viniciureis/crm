<?php require_once('includes/header.php'); ?>
    <main class="d-flex flex-nowrap">
        <aside style="width: 280px;">
            <?php require_once('includes/sidebar.php'); ?>
        </aside>                                 
        <section style="width: 1640px;">
        <?php
            require_once('includes/config.php');
            switch(@$_REQUEST["page"])
            {
                case "leads":
                    include("leads.php");
                    break;
                case "novo-lead":
                    include("novo-lead.php");
                    break;
                case "listar-leads":
                    include("listar-leads.php");
                    break;   
                case "salvar-lead":
                    include("salvar-lead.php");
                    break;
                case "empresas":
                    include("empresas.php");
                    break;
                case "nova-empresa":
                    include("nova-empresa.php");
                    break;
                case "listar-empresas":
                    include("listar-empresas.php");
                    break;
                case "salvar-empresa":
                    include("salvar-empresa.php");
                    break;
                case "relatorio":
                    include("relatorio.php");
                    break;
                case "novo-relatorio":
                    include("novo-relatorio.php");
                    break;
                case "listar-relatorio":
                    include("listar-relatorio.php");
                    break;   
                case "salvar-relatorio":
                    include("salvar-relatorio.php");
                    break;
                case "usuarios":
                    include("usuarios.php");
                    break;  
                case "novo-usuario":
                    include("novo-usuario.php");
                    break;
                case "listar-usuarios":
                    include("listar-usuarios.php");
                    break;   
                case "salvar-usuario":
                    include("salvar-usuario.php");
                    break;       
                default:
                    include("home.php");
                    break;
            }
        ?>
        </section>                                                        
    </main>
<?php require_once('includes/footer.php'); ?>
        