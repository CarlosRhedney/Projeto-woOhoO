<?php
  $erro = isset($_GET["erro"]) ? $_GET["erro"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Cabecalho contem os arquivos title, icon, estilo.css, fonts e etc -->
    <?php include("cabecalho_index.php"); ?>
    <!-- Fim Cabecalho -->
  </head>
  <body style="background:#F5DEB3;">
    <!-- Navegaçao contem os liks de navegaçao, botao e etc -->
    <?php include("navegacao_index.php"); ?>
    <!-- Fim Navegaçao -->
    <!-- Modal contem o formulario de login da tela index -->
    <?php include("modal_index.php"); ?>
    <!-- Fim Modal -->
    <!-- Jumbotron contem os informativos de sja bem vindo ao woohoo -->
    <?php include("jumbotron_index.php"); ?>
    <!-- Fim Jumbotron -->
    <!-- Footer contem os links de eventos, ajuda, sobre a conta, etc.. -->
    <?php include("footer_index.php"); ?>
    <!-- Fim Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>