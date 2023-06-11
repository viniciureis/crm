<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRM</title>    
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/sign-in.css">        
    </head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form method="post" action="login.php">
                <img class="mb-4" src="" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="nome@exemplo.com">
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha">
                    <label for="floatingPassword">Senha</label>
                </div>
                <div class="checkbox mb-3">
                    <label><input type="checkbox" value="remember-me"> Lembrar-me</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; 2023 - CRM</p>
            </form>
        </main>
                     
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>