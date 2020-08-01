<?php include("script_botoes_perfil.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Cabecalho contem os arquivos title, icon, estilo.css, fonts e etc -->
    <?php include("cabecalho_home.php"); ?>
    <!-- Fim Cabecalho -->
  </head>
  <body style="background:#F5DEB3; overflow-y:hidden">
    <!-- Navegaçao contem os liks de navegaçao, botao e etc -->
    <?php include("navegacao_home.php"); ?>
    <!-- Fim Navegaçao -->
    <!-- Article contem a imagem do perfil com usuario e email, formulario de inserçao de posts e formulario de inserçao de posts de imagens, botoes curtiu, nao curtiu etc... -->
    <?php include("article_home.php"); ?>
    <!-- Fim Article -->
    <!-- Modal contem as imagens postadas ou do perfil quando clicadas -->
    <?php include("modal_imagens.php"); ?>
    <!-- Fim modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>