<?php
$usuario = new Usuario();
$usuarios = $usuario->recuperarTodos();
?>
<html>
    <head>

        <title></title>
    </head>
    <body>
        <a href="cadastro.php?" class="btn btn-primary">Inserir</a>

        <table class="table table-bordered table-striped table-hover table-condensed">
            <tr>
                <td>Ações</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>Cidade</td>
                <td>Telefone</td>
                <td>Estado</td>
                <td>Login</td>
                <td>E-mail</td>
                <td>Senha</td>
            </tr>
            <?php foreach ($usuarios as $dados) { ?>
                <tr>
                    <td>
                        <a href="usuario/processamento.php?acao=excluir&id=<?php echo $dados['id_usuario']; ?>" class="btn btn-danger" >Excluir</a>
                        <a href="cadastro.php/?id=<?php echo $dados['id_usuario']; ?>" class="btn btn-success" >Alterar</a>
                    </td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['cpf']; ?></td>
                    <td><?php echo $dados['cidade']; ?></td>
                    <td><?php echo $dados['telefone']; ?></td>
                    <td><?php echo $dados['estado']; ?></td>
                    <td><?php echo $dados['login']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['senha']; ?></td>
                </tr>            		
            <?php } ?>



        </table>
    </body>
</html>