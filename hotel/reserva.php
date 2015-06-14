<!DOCTYPE html>
<?php
include_once 'conexao.php';
include_once 'usuario/Usuario.php';
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
        <link rel="stylesheet" href="css/style.css" />	
        <link rel="stylesheet" href="../projeto3/css/animate.css" />	

        <link rel="stylesheet" href="../projeto3/css/bootstrap.min.css" />

        <script type="text/javascript" src="../projeto3/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="../projeto3/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    </head>
    <body>

        <?php include_once "topo.php" ?>
        <div class="conteudo-reserva">


            <?php
            if (isset($_GET['pagina']) && file_exists($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
            } else {
                $pagina = 'usuario/listagem.php';
            }

            include_once $pagina;


            /*
              $login_cookie = $_COOKIE['login'];

              if (isset($login_cookie)) {
              echo"Bem-Vindo, $login_cookie <br>";
              ?>
              <form class="center" action="#" id="form" method="post">
              <fieldset class="box">
              <legend>Data para reserva</legend>
              <h3 class="title-reserva">Data de entrada e saída do hotel</h3>
              <label for="entrada">Data de entrada:</label>
              <input type="date" id="entrada" name="entrada"/>

              <label for="saida">Data de Saída:</label>
              <input type="date" id="saída" name="saida" />


              <h2 class="title-reserva">Quantidade de pessoas por apartamento </h2>

              <label for="adultos">Adultos:</label>
              <select id="adultos" name="adultos" class="select" style="width:150px">
              <option value="">0</option>
              <option value="um">1</option>
              <option value="dois">2</option>
              <option value="três">3</option>
              </select>

              <label for="criancas">Crianças:</label>
              <select id="criancas" name="criancas" class="chosen-select" style="width:150px">
              <option value="">0</option>
              <option value="um">1</option>
              <option value="dois">2</option>
              </select><br />

              <input type="submit" class="acao-quarto" value="+ Adicionar quarto" /><br />

              <input type="submit" name="next" class="next acao-busca" value="Reservar" />

              </fieldset>
              </form>
              <?php
              } else {
              echo"Bem-Vindo, convidado <br>";
              echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
              echo"<br><a href='login.php'>Faça Login</a> Para ler o conteúdo";
              }
             */
            ?>


        </div>


<?php include_once "topo.php" ?>


    </body>
</html>