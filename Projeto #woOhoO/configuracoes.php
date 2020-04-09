<?php
  session_start();
  if(!isset($_SESSION["usuario"])){
    header("Location: index.php?erro=1");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Cabecalho contem os arquivos title, icon, estilo.css, arquivos javascript, fonts e etc -->
    <?php include("cabecalho_configuracoes.php"); ?>
    <!-- Fim Cabecalho -->
  </head>
  <body style="background:#F5DEB3;">
    <!-- Navegaçao contem os liks de navegaçao, botao e etc -->
    <?php include("navegacao_configuracoes.php"); ?>
    <!-- Fim Navegaçao -->
    <!-- Modal contem o formulario de mudança de nome e exclusao de conta -->
    <?php include("modal_configuracoes.php"); ?>
    <!-- Fim modal -->
    <!-- Article contem a imagem do perfil com usuario e email, botoes curtiu, nao curtiu etc... -->
    <?php include("article_configuracoes.php"); ?>
    <!-- Fim Article -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>