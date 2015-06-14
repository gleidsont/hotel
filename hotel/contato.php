<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="../projeto3/css/animate.css" />	

        <script type="text/javascript" src="../projeto3/js/jquery-1.11.3.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="http://css4html.com.br/assets/javascripts/jquery.phone.brazil.min.js"></script>
    </head>
    <body>

        <?php include_once "topo.php" ?>
        <h1 class="animated fadeIn titulo-padrao">Fale Conosco</h1>

        <div class="conteudo-contato">

            <form id="contato" action="#" method="post">
                <div class="input">
                    <label for="name">Nome</label>
                    <input type="text" id="name" placeholder="Nome" required="required"/>
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email" required="required"/>
                </div>
                <div class="input">
                    <label for="fone">Telefone</label>
                    <input type="text" id="fone" name="fone" maxlength="13" placeholder="Telefone" required>
                </div>
                <div class="input">
                    <label for="assunto">Assunto</label>
                    <input type="text" id="assunto" placeholder="Assunto" required="required"/>
                </div>

                <div class="input txt">

                    <textarea placeholder="Escreva aqui sua mensagem.." id="mensagem" required="required"></textarea>

                </div>
                <div class="buttons">
                    <span class="form-message"></span>
                    <input type="submit" value="Enviar" />
                </div>
            </form>

            <div class="infos">
                <h3>Reservas e Cancelamentos:</h3>
                <span class="icon-phone">(61)3695-8765</span>

                <span class="icon-mail">reservaplaza@brasiliaplaza.com.br</span>

                <h3>Endereço:</h3>
                <span class="icon-location">Brasília Plaza 
                    SHTN, Trecho 1, Lote 1 – CEP:70800-200 - Brasília/DF 
                    Brasília, 
                    Brasil
                </span>

                <h3>Telefone:</h3>
                <span class="icon-phone">(61)3156-9874</span>

            </div>

        </div>



        <?php include_once "footer.php" ?>

    </body>
</html>