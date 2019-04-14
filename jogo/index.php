<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>jogo da velha</title>
    <meta charset="UTF-8" />
    <link rel="icon" href="imagens/iniciar.png" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="jquery-2.2.1.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="jogo.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: url('imagens/velha.jpg') no-repeat; background-position:top;">
    <div id="pagina_inicial" align="center" style="background-color:#fff;">
      <table border="0" style="width:600px;">
        <thead>
          <tr>
            <td align="center" colspan="3">JOGO DA VELHA</td>
          </tr>
        </thead>
        <tbody>
          <!-- imagens dos jogadores na pagina inicial -->
          <tr>
            <td align="center"><img src="imagens/jogador_1.png" /><br /><input type="text" id="entrada_nome_jogador1" style="border:0px;" placeholder="Digite o nome do jogador 1" /></td>
            <td align="center"><img src="imagens/iniciar.png" id="btn_inicia_jogo" /></td>
            <td style="background-color:#fff;" align="center"><img src="imagens/jogador_2.png" /><br /><input type="text" id="entrada_nome_jogador2" style="border:0px;" placeholder="Digite o nome do jogador 2" /></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Essas divs serão como uma tela secundária, mais na verdade será manipulada pelo jquery -->
    <div id="pagina_jogo" style="display:none; text-align:center; background-color:#fff;">
      <!-- imagem do jogador 1 -->
      <div style="display:inline-block;">
        <img src="imagens/jogador_1.png" />
        <br />
        <span id="nome_jogador1"></span>
      </div>      

      <!-- Tabela com o grid -->
      <div style="display:inline-block;">
        <table border="0">
          <tr>
            <td style="border-bottom:1px solid red; border-right:1px solid red;">
              <div class="jogada" id="a-1" style="width:90px; height:90px;"></div>
            </td>
            <td style="border-bottom:1px solid red; border-right:1px solid red;">
              <div class="jogada" id="a-2" style="width:90px; height:90px;"></div>
            </td>
            <td style="border-bottom:1px solid red;">
              <div class="jogada" id="a-3" style="width:90px; height:90px;"></div>
            </td>
          </tr>
          <tr>
            <td style="border-bottom:1px solid red; border-right:1px solid red;">
              <div class="jogada" id="b-1" style="width:90px; height:90px;"></div>
            </td>
            <td style="border-bottom:1px solid red; border-right:1px solid red;">
              <div class="jogada" id="b-2" style="width:90px; height:90px;"></div>
            </td>
            <td style="border-bottom:1px solid red;">
              <div class="jogada" id="b-3" style="width:90px; height:90px;"></div>
            </td>
          </tr>
          <tr>
            <td style="border-right:1px solid red;">
              <div class="jogada" id="c-1" style="width:90px; height:90px;"></div>
            </td>
            <td style="border-right:1px solid red;">
              <div class="jogada" id="c-2" style="width:90px; height:90px;"></div>
            </td>
            <td>
              <div class="jogada" id="c-3" style="width:90px; height:90px;"></div>
            </td>
          </tr>
        </table>
      </div>
      <!-- imagem do jogador 2 -->
      <div style="display:inline-block;"><img src="imagens/jogador_2.png" /><br /><span id="nome_jogador2"></span></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>