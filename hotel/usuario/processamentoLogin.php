<?php

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

$con= mysqli_connect("localhost","root","","mydb");
if (mysqli_connect_errno()) {
    echo "Erro ao se conectar com banco de dados: " . mysqli_connect_error();
}

if (isset($entrar)) {

    $verifica = mysqli_query($con , "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    $t = 0;
    while ($row = mysqli_fetch_array($verifica)) {
        echo "<p>Bem vindo, " . $row['login'] . ".</p>";
        if ($row['nivel'] == 1) {
            header("location: indexCliente.php");
        }elseif($row['nivel'] == 2){
            header("location: ../adm.php");
        }
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

