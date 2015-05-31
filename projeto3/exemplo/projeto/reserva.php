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
   <h1 class="titulo-padrao">Faça Sua Reserva</h1>
	
		<form method="post" action="/Hotel/controller" id="formReserva">  <!-- Nome da classe controladora na action (nunca muda) -->
			<h2>Dados Pessoais</h2>
			<p><label for="nome">Nome:</label><input type="text" name="nome" id="nome" size="50"></p>
			<p><label for="endereco">Endereço:</label><input type="text" name="endereco" id="endereco" size="50"></p>
			<p><label for="telefone">Telefone:</label><input type="text" name="telefone" id="telefone" size="15"></p>
			<p><label for="cidade">Cidade:</label><input type="text" name="cidade" id="cidade" size="10"></p>
			<p><label for="cep">Cep:</label><input type="text" name="cep" id="cep" size="10"></p>
			<p><label for="estado">Estado:</label><input type="text" name="estado" id="estado" size="10"></p>
			<p><label for="pais">País:</label><input type="text" name="pais" id="pais" size="10"></p>
			<p><label for="email">E-mail:</label><input type="text" name="email" id="email" size="30"></p>
			<h2>Reserva</h2>

			<p><label for="tipo_quarto">Tipo do quarto:</label><select name="tipo_quarto" id="tipo_quarto">
  					<option value=""></option>
  					<option value="luxo">Suíte Luxo Casal</option>
  					<option value="luxo">Suíte Luxo Solteiro</option>
  					<option value="superluxo">Suíte Super Luxo Solteiro</option>
  					<option value="luxo">Suíte Super Luxo Casal</option>
  					<option value="premium">Premium Solteiro</option>
  					<option value="luxo">Premium Casal</option>
			</select></p>
				<label for="dataEntrada">Data de entrada</label><br />
 				<input id="dataEntrada" type="date" min="2012-01-01" required /><br />
 				<label for="dataSaida">Data de saída</label><br />
 				<input id="dataSaida" type="date" min="2012-01-02" required /><br />
			<p><label>Cafe da manhã:</label><label class="normal"><input type="radio" name="cafe" value="yes" checked="checked">Sim</label> <label class="normal"><input type="radio" name="cafe" value="no">Não</label></p>
			<h2>Pagamento</h2>
			<p><label for="tipo_cartao">Tipo do Cartão: </label><select id="tipo_cartao" name="tipo_cartao">
				<option value=""></option>
				<option value="master">MasterCard</option>
				<option value="visa">Visa</option>
				<option value="dinners">Dinners Club</option>
			</select></p>
			<p><label for="numero_cartao">Número do Cartão:</label><input type="text" name="numero_cartao" id="numero_cartao" size="40"></p>
			<p><input type="submit" value="Fazer Reserva"></p>
			<input type="hidden" name="action" value="FazerReserva" id="logica"> <!-- Nome da classe action (input necessário com id sempre o mesmo : logica) -->
		</form>



	</div>
	



</body>
</html>