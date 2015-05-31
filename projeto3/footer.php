<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Projeto</title>

	<link rel="stylesheet" href="css/style.css" />	
	<link rel="stylesheet" href="../projeto3/css/animate.css" />	
	
<link rel="stylesheet" href="../projeto3/css/bootstrap.min.css" />


<script type="text/javascript" src="../projeto3/js/angular-route.min.js"></script>
<script type="text/javascript" src="../projeto3/js/angular.min.js"></script>
	
	<script type="text/javascript" src="../projeto3/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../projeto3/js/bootstrap.min.js"></script>


	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



</head>
<body>


<footer id="footer">

<form class="center" action="#" id="form" method="post">

                <label for="entrada">Data de entrada:</label>
                <input type="date" id="entrada" name="entrada"/>

                <label for="saida">Data de Saída:</label>
                 <input type="date" id="saída" name="saida" />

         <label for="adultos">Adultos:</label>
          <select id="adultos" name="adultos" class="select">
             <option value="">0</option>
            <option value="um">1</option>
            <option value="dois">2</option>
             <option value="três">3</option>
         </select>

         <label for="criancas">Crianças:</label>
             <select id="criancas" name="criancas" class="chosen-select"/>
             <option value="">0</option>
            <option value="um">1</option>
            <option value="dois">2</option>
         </select>

         <input type="submit" name="next" class="next reservar" value="Reservar" />

</form>


</footer>


</body>


