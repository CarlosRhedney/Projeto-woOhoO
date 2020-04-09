<?php
  $erroUsuario = isset($_GET["erroUsuario"]) ? $_GET["erroUsuario"] : 0;
  $erroEmail = isset($_GET["erroEmail"]) ? $_GET["erroEmail"] : 0;
  $succadastro = isset($_GET["succadastro"]) ? $_GET["succadastro"] : 0;
  $errocadastro = isset($_GET["errocadastro"]) ? $_GET["errocadastro"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Cabecalho contem os arquivos title, icon, estilo.css, fonts e etc -->
    <?php include("cabecalho_inscreva_se.php"); ?>
    <!-- Fim Cabecalho -->
  </head>
  <body style="background:#F5DEB3;">
    <!-- Navegaçao contem os liks de navegaçao, botao e etc -->
    <?php include("navegacao_inscreva_se.php"); ?>
    <!-- Fim Navegaçao -->
    <!-- Article contem o formulario de inscriçao do usuario eo botao de cadastro -->
    <?php include("article_inscreva_se.php"); ?>
    <!-- Fim Article -->
    <!-- Footer contem os links de eventos, ajuda, sobre a conta, etc.. -->
    <?php include("footer_inscreva_se.php"); ?>
    <!-- Fim Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>