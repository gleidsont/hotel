<?php
include_once '../conexao.php';
include_once 'Usuario.php';

$usuario = new Usuario();

switch ($_GET['acao']) {
    case 'excluir':
        $resultado = $usuario->excluir($_GET['id']);
        break;
    case 'salvar':

        if (!empty($_POST['id_usuario'])) {

            $resultado = $usuario->alterar($_POST);
        } else {

            $resultado = $usuario->inserir($_POST);
        }
        break;
}


if ($resultado) {
    $mensagem = "Sucesso!";
} else {
    $mensagem = "Erro.";
}
?>
<script>
    alert('<?php echo $mensagem; ?>');
    window.location.href = "../index.php";
</script>
