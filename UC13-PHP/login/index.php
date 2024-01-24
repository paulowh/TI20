<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container login-container">
        <h2 class="text-center mb-4" >Login</h2>
        <?php
            if(isset($_GET['mensagem'])){
                echo '<h3 class="text-center mb-4">Senha ou usuario incorreto</h3>';
            }
            //$_GET  -> captura as informações passada pelo o metodo GET 
            //$_POST -> captura as informações passada pelo o metodo POST 
            //empty  -> verifica se esta vazio
            //isset  -> verifica se a variavel foi declarada
        ?>
        <form method="POST" action="validar-senha.php">
            <div class="mt-1 form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite o Usuario" >
            </div>

            <div class="mt-1 form-group">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha" >
            </div>

            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="#">Esqueci a senha</a> | <a href="cadastro.php">Cadastrar Usuario</a>
        </div>
    </div>
</body>
</html>