<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Projeto</title>
	<link rel="stylesheet" href="css/style.css" />	

	<script  type="text/javascript" src="../projeto/js/script.js"></script>
	<script type="text/javascript" src="../projeto/js/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

</head>
<body>
   
   <?php include_once "topo.php" ?>

   <div class="fundo-padrao">
   <h1 class="titulo-padrao">Fale Conosco</h1>
   <div class="conteudo-contato">

	<div class="container-contato">

   	<form id="contato" action="#" method="post">
    <div class="left">
      <input type="text" placeholder="Nome" required="required"/>
      <input type="email" placeholder="Email" required="required"/>
      <input type="text" placeholder="Assunto" required="required"/>
    </div>
    <div class="right">
      <textarea placeholder="Message" required="required"></textarea>
    </div>
    <div class="enviar cl">
      <button type="submit">Enviar</button>
    </div>
  </form>
  	
	</div>
	
</div>

   </div>


</body>
</html>