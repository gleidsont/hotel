<?php

include_once '../conexao.php';

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

$conexao = new Conexao();
if (isset($entrar)) {

    $verifica = mysql_query($conexao->conectar(), "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    $t = 0;
    while ($row = mysqli_fetch_array($verifica)) {
        echo "<p>Bem vindo, " . $row['login'] . ".</p>";
        header("location: ../adm.php");
        $t = 1;
        echo "<a href='logout.php'>Clique aqui para sair</a>";
    }
    if ($t == 0) {
        echo "<p>Usuario e/ou senha incorretos. Por favor, tente novamente.</p>";
        echo "<a href='../login.php'>Clique aqui para voltar</a>";
    }



    /* if (mysqli_num_rows($verifica) <= 0) {
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../login.php';</script>";
      die();
      } else {
      setcookie("login", $login);
      header("Location:../adm.php");
      } */
}

