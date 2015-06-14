<?php 
include_once 'usuario/Usuario.php';
$usuario = new Usuario();

if ( !empty( $_GET['id'] ) ) {
	$usuario->carregar($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
        <link rel="stylesheet" href="css/style.css" />	
        <link rel="stylesheet" href="../projeto3/css/animate.css" />
        <link rel="stylesheet" href="../projeto3/css/bootstrap.min.css" />


        <script type="text/javascript" src="../projeto3/js/script.js"></script>

        <script type="text/javascript" src="../projeto3/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../projeto3/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    </head>

    <body>
        <?php include_once "topo.php" ?>

        <div class="conteudo-cadastro">
            <h1 class="animated fadeIn titulo-padrao">Cadastro</h1>

            <form class="cd-form" action="usuario/processamento.php?acao=salvar" method="post">

                <label  class="cd-nome" for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario->getNome(); ?>"  placeholder="Nome" required>

                <label   class="cd-cpf" for="cpf">CPF:</label>
                <input  type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $usuario->getCpf(); ?>" placeholder="Digite seu CPF" required >

                <label   class="cd-cidade" for="cidade">Cidade:</label>
                <input  type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $usuario->getCidade(); ?>" placeholder="Cidade" required>

                <label   class="cd-fone" for="telefone">Telefone:</label>
                <input  type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $usuario->getTelefone(); ?>" placeholder="Digite seu telefone" required>

                <label  class="cd-estado"  for="estado">Estado:</label>

                <select   id="estado" name="estado" class="form-control" required>
                    <option>Selecione seu estado...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>ES</option>
                    <option>DF</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                </select>

                <label class="cd-username" for="username">Nome de usuário:</label>
                <input class="form-control" id="login" name="login" type="text" value="<?php echo $usuario->getLogin(); ?>" placeholder="Username" required>


                <label class="cd-email" for="email">E-mail:</label>
                <input class="form-control" id="email" name="email" type="email" value="<?php echo $usuario->getEmail(); ?>" placeholder="E-mail" required>

                <label class="cd-senha" for="senha">Senha:</label>
                <input class="form-control" id="senha" name="senha" type="text" value="<?php echo $usuario->getSenha(); ?>"  placeholder="Senha" required>

                <input class="botao" type="submit" value="Cadastrar">


            </form>







        </div>






        <?php include_once "footer.php" ?>

    </body>

</html>