<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
        <link rel="stylesheet" href="css/style.css" />

        <script  type="text/javascript" src="../projeto3/js/script.js"></script>
        <script type="text/javascript" src="../projeto3/js/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

    </head>
    <body>
        <?php include_once "topo.php" ?>
        <h1 class="animated fadeIn titulo-padrao" >Serviços</h1>

        <div class="conteudo-servicos">

            <div class="text-center">
                <ul class="nav nav-pills centered-pills">

                    <li><a href="#tab4" data-toggle="tab">Gastronomia</a></li>
                    <li class="active"><a href="#tab5" data-toggle="tab">Serviços e Lazer</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="tab4">
                    <h3 class="title">Gastronomia</h3>
                    <p class="paragrafo">Nosso restaurante oferece um serviço completo de alimentos e bebidas, capaz de agradar paladares exigentes. 
                        O ambiente tem capacidade para 94 pessoas e pode ser expandido para 150 pessoas, se usarmos o jardim. Com uma decoração sóbria e elegante, 
                        é ideal para almoços e jantares de executivos que buscam fugir do burburinho habitual nos restaurantes da cidade. Também oferecemos os serviços 
                        de almoços e jantares exclusivos nos espaços reservados do Hotel. Room Service 24h e atendimento às demandas de eventos (coffees, almoços e jantares).</p> 
                    <h2 class="title">Café da manhã</h2>
                    <p class="paragrafo">O serviço está incluso no valor da diária de hospedagem. Tipo buffet,o cliente encontrará entre outros itens: frutas, pães, bolos, sucos e frios. É servido no Restaurante Flowers das 6h às 10h.</p>
                </div>
                <div class="tab-pane active" id="tab5">

                    <h3 class="title">Room Service</h3>
                    <p  class="paragrafo">O serviço de quarto está à disposição do hóspede 24h, diariamente. No cardápio, opções de saladas, lanches ou refeições completas, bebidas e sobremesas.</p>

                    <h3 class="title">Piscina</h3>
                    <p class="paragrafo">Localizada na cobertura do hotel, com linda vista para a Esplanada dos Ministérios, a piscina está à disposição dos hóspedes das 11h às 23h, diariamente. 
                        A profundidade máxima é de 1m. 
                        O serviço de bar da piscina atende diariamente das 11h às 23h, com cardápio exclusivo composto por aperitivos e bebidas.</p>

                    <h3 class="title">Lavanderia</h3>
                    <p class="paragrafo">Atende diariamente,conforme abaixo:</p>

                    <p class="paragrafo">Segunda, Terça, quarta, quinta e sexta feiras: 7h00 as 22h00</p>
                    <p class="paragrafo">Sabados, domingos e feriados: 07h00 as 19h00</p>

                    <p class="paragrafo">. Consulte no hotel a tabela de preços vigente.</p>


                    <h3 class="title">Internet</h3>
                    <p class="paragrafo">Na recepção do hotel o hóspede encontra uma estação com computadores e acesso à internet. 
                        Para o uso, basta comprar o cartão de acesso para o tempo desejado.</p>

                    <p class="paragrafo">Acesso a internet Wi fi nos apartamentos: Cortesia/Free ( 1 Mbps)</p>

                </div>
            </div>



        </div>


        <?php include_once "footer.php" ?>

    </body>
</html>