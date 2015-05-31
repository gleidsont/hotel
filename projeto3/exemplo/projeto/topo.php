<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Projeto</title>
	<link rel="stylesheet" href="css/style.css" />	
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script type="text/javascript" src="js/prefixfree.min.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
	<script  type="text/javascript" src="../projeto/js/script.js"></script>
	<script type="text/javascript" src="../projeto/js/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

</head>
<body>
   
   <div class="menu" ><!--  header logo -->
      
       <header class="logo">
             <img src="../projeto/images/logo_03.png" alt="logo" /> 

    <div class="botao" >
 			<a href="#" data-toggle="modal"  data-target="#modal-one">Entrar</a>
		</div>

    <div class="botao">
        <a href="#modal-two"  data-toggle="modal"  data-target="#modal-two">Cadastre-se</a>
    </div>

    <!--MODAL ENTRAR-->

    <div class="modal fade" id="modal-one" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
    </div>
    <div class="modal-body">
          <form action="#" method="post"  id="contato">
            <input type='text' id='username' placeholder='Username'>
              <input type='password' id='password' placeholder='Password'>
          </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn botao">Entrar</button>

        <button type="button" class="btn btn-default botao" data-dismiss="modal">Fechar</button>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="modal-two" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
    </div>

    <div class="modal-body">
        <form action="#" method="post" id="contato">
          <input type='text' id='username' placeholder='Username' required/>
          <input type='password' id='password' placeholder='Password' required />
          <input type="text" id="name" placeholder="Escreva seu Nome Completo" required />
          <input type="text" id="tel" placeholder="Digite seu Telefone" required />
          <input type="text" id="cpf" placeholder="Digite seu CPF" required/>

        </form>
    </div>

    <div class="modal-footer">
         <button type="button" class="btn botao">Registrar</button>
        <button type="button" class="btn btn-default botao" data-dismiss="modal">Fechar</button>

    </div>
      </div>
      </div>
    </div>


        </header>

	</div><!-- FIM HEADER LOGO -->
        
    <nav><!-- menu -->
      <div class="handle">Menu</div> 
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="servicos.php">Serviços</a></li>
        <li><a href="galeria.php">Quartos</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="reserva.php">Reserve</a></li>
      </ul>
    </nav><!-- FIM menu -->


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	



</body>
</html>