<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
        <link rel="stylesheet" href="css/style.css" />	
        <link rel="stylesheet" href="../projeto3/css/animate.css" />	
        <script type="text/javascript" src="../projeto3/js/script.js"></script>

        <link rel="stylesheet" href="../projeto3/css/bootstrap.min.css" />

        <script type="text/javascript" src="../projeto3/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../projeto3/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    </head>

    <body>
        <?php include_once "topo.php" ?>
        <h1 class="animated fadeIn titulo-padrao">Login</h1>

        <form action="usuario/processamentoLogin.php" method="post" class="lg-form">
            <label class="cd-username" for="signup-username">Nome de usuário:</label>
            <input class="form-control" id="login" name="login" type="text" placeholder="Username" required>

            <label class="cd-senha" for="signup-senha">Senha:</label>
            <input class="form-control" id="senha" name="senha" type="text"  placeholder="Senha" required>

            <input class="botao" type="submit" name="entrar" id="entrar" value="Entrar">

        </form>

        <?php include_once "footer.php" ?>
    </body>

</html>