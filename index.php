<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRM</title>    
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">       
    </head>
    <body>
        <main>
            <div style="width: 800px; margin: 10% auto; display: flex; align-items: center; justify-content: space-between; padding: 16px; border: 1px solid #000;">
                <div style="box-sizing: border-box; background-color: #000; padding: 108px 75px; color: #fff; display: flex; align-items: center; justify-content: center; width: 50%; margin-right: 16px;">
                    <h1>Logotipo</h1>
                </div>
                <div style="box-sizing: border-box; background-color: #f1f1f1; padding: 25px; width:50%;">
                    <form method="post" action="login.php">
                        <div style="margin: 8px 0px;">
                            <label for="floatingEmail">E-mail</label>
                            <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Digite o seu e-mail">  
                        </div>
                        <div style="margin: 8px 0px;">
                            <label for="floatingPassword">Senha</label>
                            <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Digite a sua senha">
                        </div>
                        <div style="margin: 8px 0px;">
                            <label><input type="checkbox" value="remember-me"> Lembrar-me</label>
                        </div>
                        <button style="margin: 8px 0px;" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </main>   
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>