<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Projeto</title>
	<link rel="stylesheet" href="css/style.css" />	

	<script type="text/javascript" src="../projeto/js/angular.min.js"></script>

	<script  type="text/javascript" src="../projeto/js/script.js"></script>
	<script type="text/javascript" src="../projeto/js/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />


</head>
<body>
   
   <?php include_once "topo.php" ?>
   <div class="fundo-padrao">
   <h1 class="titulo-padrao">Galeria</h1>
		
	<div ng-app ng-init="tab=1">
			<ul class="tabs-nav">
  				<li><a ng-click="tab=1" ng-class="{'active' : tab==1}">Luxo</a></li>
  				<li><a ng-click="tab=2" ng-class="{'active' : tab==2}">Super Luxo</a></li>
  				<li><a ng-click="tab=3" ng-class="{'active' : tab==3}">Premium</a></li>
			</ul>
			
	<div class="tabs-container">

		<div class="tab-content" ng-show="tab == 1">
			<h3 class="title">Suíte Luxo</h3>
			<p class="paragrafo">Apartamentos disponíveis com 1 cama de casal King Size ou 2 camas de solteiro (solteirão), 
			telefone na cabeceira da cama, rádio-relógio, TV LCD 26?, mesa de trabalho com telefone, 
			internet wi-fi, mesa de refeição, ar condicionado, fechadura eletrônica, cofre eletrônico, 
			ferro e tábua de passar, 1 garrafa de água mineral cortesia e mini-bar. 
			Banheiro equipado com: telefone, secador de cabelos, espelho retrátil de aumento, 
			varal retrátil e amenities.</p> 

		<div class="galeria">
			<ul>
				<li>
					<a href="#image-1">
						<img src="images/luxo_thumb.png" alt="image01">
						<span>Luxo Casal</span>
					</a>
					<div class="lb-overlay" id="image-1">
						<a href="#page" class="lb-close">x Close</a>
							<img src="images/luxo.jpg" alt="image01" />
					<div>
							<h3>Luxo <span>/Suíte Luxo Casal/</h3>
							<p>Todo o conforto para você</p>
					</div>
							
					</div>
				</li>

				<li>
					<a href="#image-2">
						<img src="images/luxo_solteiro_thumb.png" alt="image02">
						<span>Luxo Solteiro</span>
						</a>
					<div class="lb-overlay" id="image-2">
						<img src="images/luxo_solteiro.jpg" alt="image02" />
					<div>							
						<h3>Luxo<span>/Luxo Solteiro/</h3>
						<p>Todo o conforto para você</p>
					</div>
						<a href="#page" class="lb-close">x Close</a>
					</div>
				</li>

			</ul>

		</div>

    	


			
		</div>

		<div class="tab-content" ng-show="tab == 2">
			<h3  class="title">Suíte Super Luxo</h3>
			<p  class="paragrafo">Apartamentos disponíveis com 1 cama de casal King Size ou 2 camas de solteiro (solteirão), 
			telefone na cabeceira da cama, rádio-relógio, TV LCD 26?, mesa de trabalho com telefone,
			 internet wi-fi, mesa de refeição, ar condicionado, fechadura eletrônica, cofre eletrônico, 
			 ferro e tábua de passar, 1 garrafa de água mineral cortesia. Banheiro equipado com: telefone,
			  secador de cabelos, espelho retrátil de aumento, varal retrátil e amenities. 
			  Mini-cozinha equipada com: micro-ondas e mini-bar.</p>
			
		<div class="galeria superluxo">
			<ul>
				<li>
					<a href="#image-3">
						<img src="images/superluxo_thumb.png" alt="image03">
						<span>Super luxo</span>
					</a>
					<div class="lb-overlay" id="image-3">
						<a href="#page" class="lb-close">x Close</a>
							<img src="images/superluxo.jpg" alt="image03" />
					<div>
							<h3>Super Luxo <span>/Suíte Super Luxo Casal/</h3>
							<p>Todo o conforto para você</p>
					</div>
							
					</div>
				</li>

				<li>
					<a href="#image-4">
						<img src="images/superluxo_solteiro_thumb.png" alt="image04">
						<span>Super Luxo Solteiro</span>
						</a>
					<div class="lb-overlay" id="image-4">
						<img src="images/superluxo_solteiro.jpg" alt="image04" />
					<div>							
						<h3>Super Luxo<span>/Super Luxo Solteiro/</h3>
						<p>Todo o conforto para você</p>
					</div>
						<a href="#page" class="lb-close">x Close</a>
					</div>
				</li>

				<li>
					<a href="#image-5">
						<img src="images/superluxo1_thumb.png" alt="image05">
						<span>Super Luxo Solteiro</span>
						</a>
					<div class="lb-overlay" id="image-5">
						<img src="images/superluxo_solteiro1.jpg" alt="image05" />
					<div>							
						<h3>Super Luxo<span>/Super Luxo Solteiro/</h3>
						<p>Todo o conforto para você</p>
					</div>
						<a href="#page" class="lb-close">x Close</a>
					</div>
				</li>

				<li>
					<a href="#image-6">
						<img src="images/superluxo2_thumb.png" alt="image06">
						<span>Super Luxo Solteiro</span>
						</a>
					<div class="lb-overlay" id="image-6">
						<img src="images/superluxo_solteiro2.jpg" alt="image06" />
					<div>							
						<h3>Super Luxo<span>/Super Luxo Solteiro/</h3>
						<p>Todo o conforto para você</p>
					</div>
						<a href="#page" class="lb-close">x Close</a>
					</div>
				</li>

			</ul>

		</div>
			

		</div>

		<div class="tab-content" ng-show="tab == 3">
			<h3  class="title">Premium</h3>
			<p  class="paragrafo">Apartamentos com dois ambientes, disponíveis  nas seguintes configurações:
			 1 quarto com 1 cama de casal King Size ou 2 quartos com 1 cama de casal King Size
			  e 2 camas de solteiro (solteirão), telefone na cabeceira da cama, rádio-relógio,
			   TV LCD 26?, mesa de trabalho com telefone, internet wi-fi, mesa de refeição,
			    ar condicionado, fechadura eletrônica, cofre eletrônico, ferro e tábua de passar,
			     1 garrafa de água mineral cortesia. Banheiro equipado com: telefone, secador de cabelos,
			      espelho retrátil de aumento, varal retrátil e amenities. Mini-cozinha equipada com: 
			      micro-ondas e mini-bar.</p>

		<div class="galeria premium">
				<ul>
				<li>
					<a href="#image-7">
						<img src="images/premium_thumb.png" alt="image07">
						<span>Premium</span>
					</a>
					<div class="lb-overlay" id="image-7">
						<a href="#page" class="lb-close">x Close</a>
							<img src="images/premium.jpg" alt="image01" />
					<div>
							<h3>Premium <span>/Suíte Premium/</h3>
							<p>Todo o conforto para você</p>
					</div>
							
					</div>
				</li>

				<li>
					<a href="#image-8">
						<img src="images/premium2_thumb.png" alt="image08">
						<span>Premium</span>
						</a>
					<div class="lb-overlay" id="image-8">
						<img src="images/luxo_solteiro.jpg" alt="image08" />
					<div>							
						<h3>Premium<span>/Detalhe Cozinha/</h3>
						<p>Todo o conforto para você</p>
					</div>
						<a href="#page" class="lb-close">x Close</a>
					</div>
				</li>

				<li>
					<a href="#image-9">
						<img src="images/nupcias_thumbs.png" alt="image09">
						<span>Premium</span>
						</a>
					<div class="lb-overlay" id="image-9">
						<img src="images/nupcias.jpg" alt="image09" />
					<div>							
						<h3>Premium<span>/nupcias/</h3>
						<p>Todo o conforto para você</p>
					</div>
						<a href="#page" class="lb-close">x Close</a>
					</div>
				</li>

			</ul>

		</div>

		</div>

	</div>



	</div>
		


	</div>
	



</body>
</html>