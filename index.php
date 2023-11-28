<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRM</title>
        <link rel="stylesheet" href="./css/style.css">        
    </head>
    <body>
        <main class="d-flex">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <img src="img/logo_crm.jpg" alt="Logotipo" width="100%">
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 my-5">
                        <form method="post" action="login.php" class="py-5">
                            <div class="py-5">
                                <h2 class="text-center text-md-start mb-3">Login</h2>
                                <div class="form-floating mb-3">
                                    <input type="text" id="inputUser" name="email" class="form-control" placeholder="Email">
                                    <label for="inputUser">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha">
                                    <label for="inputPassword">Senha</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="inputCheck" class="form-check-input">
                                    <label for="inputCheck" class="form-check-label">Manter Conectado</label>
                                </div>
                                <button class="btn btn-primary col-12 my-3 p-3 fw-bold fs-5">Entrar</button>
                                <a class="text-primary text-decoration-none" href="#">Não possuo cadastro</a>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </main>
    </body>
</html>