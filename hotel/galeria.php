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

        <?php include_once "topo.php" ?>
        <h1  class="animated fadeIn titulo-padrao">Galeria</h1>

        <div class="conteudo-galeria">

            <div class="text-center">
                <ul class="nav nav-pills centered-pills">

                    <li><a href="#tab1" data-toggle="tab">Luxo</a></li>
                    <li class="active"><a href="#tab2" data-toggle="tab">Suíte Luxo</a></li>
                    <li><a href="#tab3" data-toggle="tab">Premium</a></li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    <h3 class="title">Suíte Luxo</h3>
                    <p class="paragrafo">Apartamentos disponíveis com 1 cama de casal King Size ou 2 camas de solteiro (solteirão), 
                        telefone na cabeceira da cama, rádio-relógio, TV LCD 26, mesa de trabalho com telefone, 
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
                                    <a href="#page" class="lb-close">x Fechar</a>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>


                <div class="tab-pane active" id="tab2">
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
                                    <a href="#page" class="lb-close">x Fechar</a>
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
                                    <a href="#page" class="lb-close">x Fechar</a>
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
                                    <a href="#page" class="lb-close">x Fechar</a>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

                <div class="tab-pane" id="tab3">
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


    <?php include_once "footer.php" ?>

</body>
</html>