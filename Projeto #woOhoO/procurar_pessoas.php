<?php include("script_botoes_perfil.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Cabecalho contem os arquivos title, icon, estilo.css, arquivos javascript, fonts e etc -->
    <?php include("cabecalho_procurar_pessoas.php"); ?>
    <!-- Fim Cabecalho -->
  </head>
  <body style="background:#F5DEB3;">
    <!-- Navegaçao contem os liks de navegaçao, botao e etc -->
    <?php include("navegacao_procurar_pessoas.php"); ?>
    <!-- Fim Navegaçao -->
    <?php include("modal_perfil.php"); ?>
    <!-- Article contem o formulario de inserçao de imagem do perfil com usuario e email, formulario de procura por pessoas, botoes curtiu, nao curtiu etc... -->
    <?php include("article_procurar_pessoas.php"); ?>
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